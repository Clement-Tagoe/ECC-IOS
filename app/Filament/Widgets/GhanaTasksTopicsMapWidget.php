<?php

namespace App\Filament\Widgets;

use App\Models\MonitoringTask;
use App\Models\Region;
use App\Models\Topic;
use Filament\Widgets\Widget;
use Illuminate\Support\Str;

class GhanaTasksTopicsMapWidget extends Widget
{
    protected string $view = 'filament.widgets.ghana-tasks-topics-map-widget';

    protected ?string $heading = 'Topics by Region — Ghana Map';

    protected int | string | array $columnSpan = 'full';

    /** Date range filter: 'today' | '7d' | '30d' | '90d' */
    public string $dateRange = 'today';
 
    public function setDateRange(string $range): void
    {
        $this->dateRange = $range;
    }
 
    public function getDateRangeLabel(): string
    {
        return match ($this->dateRange) {
            'today' => 'Today',
            '7d'    => 'Last 7 days',
            '30d'   => 'Last 30 days',
            '90d'   => 'Last 90 days',
            default => 'Today',
        };
    }
 
    // ─────────────────────────────────────────────────────────────────────
    // Data
    // ─────────────────────────────────────────────────────────────────────
 
    public function getMapData(): array
    {
        // Apply date scope
        $query = MonitoringTask::with('topics')
            ->select('id', 'region_id', 'date', 'shift');
 
        $query = match ($this->dateRange) {
            'today' => $query->whereDate('date', today()),
            '7d'    => $query->whereDate('date', '>=', now()->subDays(6)->startOfDay()),
            '30d'   => $query->whereDate('date', '>=', now()->subDays(29)->startOfDay()),
            '90d'   => $query->whereDate('date', '>=', now()->subDays(89)->startOfDay()),
            default => $query->whereDate('date', today()),
        };
 
        $tasks   = $query->get();
        $regions = Region::orderBy('name')->get()->keyBy('id');
        $topics  = Topic::orderBy('name')->get();
 
        // Colour palette for topics — respects Topic::color if set
        $fallbackPalette = [
            '#0ea5e9', '#10b981', '#f59e0b', '#8b5cf6', '#ec4899',
            '#14b8a6', '#f97316', '#6366f1', '#22c55e', '#ef4444', '#06b6d4',
        ];
 
        $topicsFormatted = [];
        foreach ($topics as $i => $topic) {
            $topicsFormatted[$topic->id] = [
                'name'  => $topic->name,
                'color' => !empty($topic->color) ? $topic->color : $fallbackPalette[$i % count($fallbackPalette)],
            ];
        }
 
        // Seed every region with zero counts
        $regionData = [];
        foreach ($regions as $id => $region) {
            $regionData[$id] = [
                'name'     => $region->name,
                'slug'     => Str::slug($region->name),
                'total'    => 0,
                'byTopic'  => [],  // [ topic_id => ['name'=>..,'color'=>..,'count'=>N] ]
            ];
        }
 
        // Fill in task counts per region per topic
        foreach ($tasks as $task) {
            $rid = $task->region_id;
 
            if (!isset($regionData[$rid])) {
                $r = $regions->get($rid);
                $regionData[$rid] = [
                    'name'    => $r?->name ?? "Region {$rid}",
                    'slug'    => Str::slug($r?->name ?? "region-{$rid}"),
                    'total'   => 0,
                    'byTopic' => [],
                ];
            }
 
            $regionData[$rid]['total']++;
 
            foreach ($task->topics as $topic) {
                $tid   = $topic->id;
                $tInfo = $topicsFormatted[$tid] ?? ['name' => $topic->name, 'color' => '#0d9488'];
 
                if (!isset($regionData[$rid]['byTopic'][$tid])) {
                    $regionData[$rid]['byTopic'][$tid] = [
                        'name'  => $tInfo['name'],
                        'color' => $tInfo['color'],
                        'count' => 0,
                    ];
                }
                $regionData[$rid]['byTopic'][$tid]['count']++;
            }
        }
 
        // Sort each region's topics by count desc
        foreach ($regionData as &$rd) {
            uasort($rd['byTopic'], fn ($a, $b) => $b['count'] <=> $a['count']);
        }
        unset($rd);
 
        $grandTotal = collect($regionData)->sum('total');
        $maxTotal   = max(1, collect($regionData)->max('total'));
 
        return [
            'regions'    => $regionData,
            'topics'     => $topicsFormatted,
            'grandTotal' => $grandTotal,
            'maxTotal'   => $maxTotal,
        ];
    }
}
