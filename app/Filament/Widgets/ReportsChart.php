<?php

namespace App\Filament\Widgets;

use App\Models\Report;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Support\Facades\Auth;

class ReportsChart extends ChartWidget
{
    protected ?string $heading = 'Monthly Reports';
    
    protected static ?int $sort = 5;

    protected function getData(): array
    {
        $userId = Auth::id();

        // Use a subquery or a focused query to avoid including extra columns 
        // that trigger the GROUP BY error.
        $query = Report::query()
            ->where(function ($q) use ($userId) {
                $q->where('user_id', $userId)
                ->orWhereHas('collaborators', fn ($inner) => $inner->where('users.id', $userId))
                ->orWhereHas('receivers', fn ($inner) => $inner->where('users.id', $userId));
            });

        $data = Trend::query($query)
            ->dateColumn('date')
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'My Reports',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                    'fill' => 'start',
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
