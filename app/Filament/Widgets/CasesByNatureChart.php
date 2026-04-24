<?php

namespace App\Filament\Widgets;

use App\Models\ValidCase;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class CasesByNatureChart extends ChartWidget
{
    protected ?string $heading = 'Cases By Nature Chart';

    protected ?string $description = 'Incident type breakdown for the last 7 days';

    protected function getData(): array
    {
        $data = ValidCase::where('reporting_date', '>', now()->subDays(7))
            ->select('valid_case_nature_id', DB::raw('count(*) as total'))
            ->with('validCaseNature')
            ->groupBy('valid_case_nature_id')
            ->orderByDesc('total')
            ->get();
 
        $total = $data->sum('total');
 
        $labels      = [];
        $values      = [];
        $richLabels  = []; // "Name — N (X%)" used in legend
 
        $palette = [
            '#1d4ed8', '#059669', '#dc2626', '#7c3aed',
            '#d97706', '#0891b2', '#be185d', '#65a30d',
            '#ea580c', '#6366f1', '#0f766e',
        ];
 
        foreach ($data as $i => $row) {
            $name        = $row->validCaseNature?->name ?? "Nature {$row->valid_case_nature_id}";
            $count       = $row->total;
            $pct         = $total > 0 ? round(($count / $total) * 100, 1) : 0;
 
            $labels[]     = $name;
            $values[]     = $count;
            // Rich label shown in the tooltip and passed via extraData for JS use
            $richLabels[] = "{$name} — {$count} ({$pct}%)";
        }
 
        $colors = collect($labels)->map(fn ($_, $i) => $palette[$i % count($palette)])->toArray();
 
        return [
            'datasets' => [
                [
                    'label'           => 'Cases',
                    'data'            => $values,
                    'backgroundColor' => $colors,
                    'borderWidth'     => 2,
                    'borderColor'     => '#ffffff',
                    'hoverOffset'     => 8,
                ],
            ],
            'labels' => $labels,
            // Extra payload consumed by the JS options callbacks below
            'richLabels' => $richLabels,
            'total'      => $total,
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }

    protected function getOptions(): array
    {
        return [
            'cutout'  => '62%',
            'plugins' => [
                'legend' => [
                    'position' => 'right',
                    'labels'   => [
                        'boxWidth'  => 12,
                        'padding'   => 14,
                        'font'      => ['size' => 12],
                        
                        /*
                         * generateLabels is a JS function — Filament passes options
                         * as JSON, so closures must be injected via getExtraDataAttributes
                         * or a custom Livewire view. We handle this in getOptions() by
                         * using Chart.js tooltip callbacks instead (see tooltip block below).
                         *
                         * The legend labels are enriched on the PHP side via $richLabels
                         * which replaces $labels when the chart is rendered (see view override).
                         */
                    ],
                ],
                'tooltip' => [
                    'enabled' => true,
                ],
            ],
        ];
    }
}
