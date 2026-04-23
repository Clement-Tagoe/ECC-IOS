<?php

namespace App\Filament\Widgets;

use App\Models\ValidCase;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class CasesByRegionChart extends ChartWidget
{
    protected ?string $heading = 'Cases By Region Chart';
 
    protected ?string $description = 'Valid cases per region for the last 7 Days';

    protected function getData(): array
    {
        $data = ValidCase::where('reporting_date', '>' , now()->subDays(7))
            ->select('region_id', DB::raw('count(*) as total'))
            ->with('region')
            ->groupBy('region_id')
            ->orderByDesc('total')
            ->get();
 
        $labels = $data->map(fn ($row) => $row->region?->name ?? "Region {$row->region_id}")->toArray();
        $values = $data->pluck('total')->toArray();
 
        // Generate a shade of blue per bar
        $colors = collect($values)->map(fn ($_, $i) => 'rgba(29, 78, 216, ' . round(0.4 + ($i / max(count($values) - 1, 1)) * 0.6, 2) . ')')->toArray();
 
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
            'plugins'   => [
                'legend' => ['display' => false],
            ],
            'scales' => [
                'x' => ['beginAtZero' => true, 'grid' => ['display' => true]],
                'y' => ['grid' => ['display' => false]],
            ],
        ];
    }
}
