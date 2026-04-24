<?php

namespace App\Filament\Widgets;

use App\Models\Region;
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
        // Get today's case counts keyed by region_id
        $caseCounts = ValidCase::where('reporting_date', '>', now()->subDays(7))
            ->select('region_id', DB::raw('count(*) as total'))
            ->groupBy('region_id')
            ->pluck('total', 'region_id');
 
        // Fetch ALL regions, regardless of whether they have cases today
        $regions = Region::orderBy('name')->get();
 
        $labels = [];
        $values = [];
 
        foreach ($regions as $region) {
            $labels[] = $region->name;
            $values[] = $caseCounts->get($region->id, 0);
        }
 
        // Colour bars with data in solid blue, zero-count bars in muted grey
        $colors = collect($values)->map(
            fn ($v) => $v > 0
                ? 'rgba(29, 78, 216, 0.85)'
                : 'rgba(156, 163, 175, 0.4)'
        )->toArray();
 
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
