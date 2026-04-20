<?php

namespace App\Filament\Widgets;

use App\Models\Task;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Support\Facades\Auth;

class TaskChart extends ChartWidget
{
    protected ?string $heading = 'Task Chart';
    
    protected static ?int $sort = 6;

    protected function getData(): array
    {
        $userId = Auth::id();

        // Use a subquery or a focused query to avoid including extra columns 
        // that trigger the GROUP BY error.
        $query = Task::where('status', 'completed')
            ->whereHas('collaborators', function ($query) {
                $query->where('users.id', Auth::id());
            });

        $data = Trend::query($query)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'My Completed Tasks',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                    'fill' => 'start',
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
