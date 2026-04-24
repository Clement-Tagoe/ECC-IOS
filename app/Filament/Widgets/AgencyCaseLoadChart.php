<?php

namespace App\Filament\Widgets;

use App\Models\ValidCase;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class AgencyCaseLoadChart extends ChartWidget
{
    protected ?string $heading = 'Agency Case Load Chart';

    protected ?string $description = 'Agency case load for the last 7 days';
 
    protected function getData(): array
    {
        $data = ValidCase::where('reporting_date', '>', now()->subDays(7))
            ->select('agency_id', DB::raw('count(*) as total'))
            ->with('Agency')
            ->groupBy('agency_id')
            ->orderByDesc('total')
            ->limit(10)
            ->get();
 
        $labels = $data->map(fn ($row) => $row->agency?->name ?? "Agency {$row->agency_id}")->toArray();
        $values = $data->pluck('total')->toArray();
 
        $palette = [
            '#7c3aed', '#6d28d9', '#5b21b6', '#4c1d95',
            '#8b5cf6', '#a78bfa', '#c4b5fd', '#ddd6fe',
            '#ede9fe', '#f5f3ff',
        ];
 
        $colors = collect($labels)->map(fn ($_, $i) => $palette[$i % count($palette)])->toArray();
 
        return [
            'datasets' => [
                [
                    'label'           => 'Cases',
                    'data'            => $values,
                    'backgroundColor' => $colors,
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
            'indexAxis' => 'y',
            'plugins'   => ['legend' => ['display' => false]],
            'scales'    => [
                'x' => ['beginAtZero' => true, 'grid' => ['color' => 'rgba(0,0,0,0.05)']],
                'y' => ['grid' => ['display' => false]],
            ],
        ];
    }
}
