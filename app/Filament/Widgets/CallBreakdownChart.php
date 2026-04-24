<?php

namespace App\Filament\Widgets;

use App\Models\CallLog;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class CallBreakdownChart extends ChartWidget
{
    protected ?string $heading = 'Call Breakdown — Last 7 Days';
 
    protected ?string $description = 'Incoming, valid, and prank calls per day';
 
 
    protected function getData(): array
    {
        $days = collect(range(6, 0))->map(fn ($d) => now()->subDays($d)->toDateString());
 
        $logs = CallLog::where('date', '>', now()->subDays(7))
            ->orderBy('date')
            ->get()
            ->keyBy(fn ($row) => Carbon::parse($row->date)->toDateString());
 
        $labels  = $days->map(fn ($d) => Carbon::parse($d)->format('D d M'))->toArray();
        $total   = $days->map(fn ($d) => $logs->get($d)?->total_calls_received ?? 0)->toArray();
        $valid   = $days->map(fn ($d) => $logs->get($d)?->valid_calls ?? 0)->toArray();
        $prank   = $days->map(fn ($d) => $logs->get($d)?->prank_calls ?? 0)->toArray();
 
        return [
            'datasets' => [
                [
                    'label'           => 'Total Received',
                    'data'            => $total,
                    'backgroundColor' => '#1d4ed8',
                    'borderRadius'    => 4,
                ],
                [
                    'label'           => 'Valid Calls',
                    'data'            => $valid,
                    'backgroundColor' => '#059669',
                    'borderRadius'    => 4,
                ],
                [
                    'label'           => 'Prank / Invalid',
                    'data'            => $prank,
                    'backgroundColor' => '#dc2626',
                    'borderRadius'    => 4,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => ['position' => 'top'],
            ],
            'scales' => [
                'x' => ['grid' => ['display' => false]],
                'y' => ['beginAtZero' => true],
            ],
        ];
    }
}
