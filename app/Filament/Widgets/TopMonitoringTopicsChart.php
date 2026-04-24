<?php

namespace App\Filament\Widgets;

use App\Models\Topic;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class TopMonitoringTopicsChart extends ChartWidget
{
    protected ?string $heading = 'Top Monitoring Topics Chart';

    protected ?string $description = 'Most frequently tagged topics across monitoring tasks';

    public ?string $filter = '30';

    protected function getFilters(): ?array
    {
        return [
            '7'  => 'Last 7 days',
            '30' => 'Last 30 days',
            '90' => 'Last 90 days',
        ];
    }
 
    protected function getData(): array
    {
        $days = (int) ($this->filter ?? 30);
 
        $data = Topic::withCount(['monitoringTasks' => function ($query) use ($days) {
            $query->whereDate('date', '>=', Carbon::now()->subDays($days));
        }])
            ->having('monitoring_tasks_count', '>', 0)
            ->orderByDesc('monitoring_tasks_count')
            ->limit(8)
            ->get();
 
        $backgroundColors = [
            'rgba(59, 130, 246, 0.8)',
            'rgba(16, 185, 129, 0.8)',
            'rgba(245, 158, 11, 0.8)',
            'rgba(239, 68, 68, 0.8)',
            'rgba(139, 92, 246, 0.8)',
            'rgba(20, 184, 166, 0.8)',
            'rgba(249, 115, 22, 0.8)',
            'rgba(236, 72, 153, 0.8)',
        ];
 
        return [
            'datasets' => [
                [
                    'data'            => $data->pluck('monitoring_tasks_count')->toArray(),
                    'backgroundColor' => array_slice($backgroundColors, 0, $data->count()),
                    'hoverOffset'     => 6,
                ],
            ],
            'labels' => $data->pluck('name')->toArray(),
        ];
    }
 
    protected function getType(): string
    {
        return 'doughnut';
    }
 
    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'position' => 'right',
                ],
            ],
            'cutout' => '65%',
        ];
    }
}
