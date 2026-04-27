<?php

namespace App\Filament\Widgets;

use App\Models\MonitoringTask;
use App\Models\Region;
use App\Models\Topic;
use App\Models\ValidCase;
use App\Models\ValidCaseNature;
use Carbon\Carbon;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GhanaRegionMapWidget extends Widget
{
    protected string $view = 'filament.widgets.ghana-region-map-widget';

    protected ?string $heading = 'Cases by Region — Ghana Map';

    protected int | string | array $columnSpan = 'full';
 
    /**
     * Reactive: which sidebar tab is active — 'cases' or 'tasks'
     */
    public string $activeTab = 'cases';
 
    public function setTab(string $tab): void
    {
        $this->activeTab = $tab;
    }
 
    // ─────────────────────────────────────────────────────────────────
    // Main data builder — returns everything the Blade view needs
    // ─────────────────────────────────────────────────────────────────
 
    public function getMapData(): array
    {
        $regions = Region::orderBy('name')->get()->keyBy('id');
 
        // ── 1. Valid cases by region + nature ────────────────────────
        $caseNatures = ValidCaseNature::orderBy('name')->get()->keyBy('id');
 
        $caseRows = ValidCase::where('reporting_date', '>', now()->subDays(7))
            ->select('region_id', 'valid_case_nature_id', DB::raw('count(*) as total'))
            ->groupBy('region_id', 'valid_case_nature_id')
            ->get();
 
        // ── 2. Monitoring tasks by region + topic ────────────────────
        $topics = Topic::orderBy('name')->get()->keyBy('id');
 
        $taskRows = MonitoringTask::where('date', '>', now()->subDays(7))
            ->with('topics')
            ->get();
 
        // ── 3. Build unified region data map ─────────────────────────
        $regionData = [];
        foreach ($regions as $id => $region) {
            $regionData[$id] = [
                'name'          => $region->name,
                'slug'          => Str::slug($region->name),
                'caseTotal'     => 0,
                'natures'       => [],   // [ nature_name => count ]
                'taskTotal'     => 0,
                'topicCounts'   => [],   // [ topic_name  => count ]
            ];
        }
 
        // Populate cases
        foreach ($caseRows as $row) {
            $rid  = $row->region_id;
            $name = $caseNatures->get($row->valid_case_nature_id)?->name ?? "Nature {$row->valid_case_nature_id}";
 
            if (!isset($regionData[$rid])) {
                $regionData[$rid] = [
                    'name'        => $regions->get($rid)?->name ?? "Region {$rid}",
                    'slug'        => Str::slug($regions->get($rid)?->name ?? "region-{$rid}"),
                    'caseTotal'   => 0,
                    'natures'     => [],
                    'taskTotal'   => 0,
                    'topicCounts' => [],
                ];
            }
 
            $regionData[$rid]['caseTotal'] += $row->total;
            $regionData[$rid]['natures'][$name] =
                ($regionData[$rid]['natures'][$name] ?? 0) + $row->total;
        }
 
        // Populate tasks
        foreach ($taskRows as $task) {
            $rid = $task->region_id;
 
            if (!isset($regionData[$rid])) {
                $regionData[$rid] = [
                    'name'        => $regions->get($rid)?->name ?? "Region {$rid}",
                    'slug'        => Str::slug($regions->get($rid)?->name ?? "region-{$rid}"),
                    'caseTotal'   => 0,
                    'natures'     => [],
                    'taskTotal'   => 0,
                    'topicCounts' => [],
                ];
            }
 
            $regionData[$rid]['taskTotal']++;
 
            foreach ($task->topics as $topic) {
                $regionData[$rid]['topicCounts'][$topic->name] =
                    ($regionData[$rid]['topicCounts'][$topic->name] ?? 0) + 1;
            }
        }
 
        // ── 4. Colour palettes ────────────────────────────────────────
        $casePalette = [
            '#ef4444','#f97316','#eab308','#22c55e','#06b6d4',
            '#3b82f6','#8b5cf6','#ec4899','#14b8a6','#f59e0b','#6366f1',
        ];
        $taskPalette = [
            '#0ea5e9','#10b981','#f59e0b','#8b5cf6','#ec4899',
            '#14b8a6','#f97316','#6366f1','#22c55e','#ef4444','#06b6d4',
        ];
 
        $naturesFormatted = [];
        foreach ($caseNatures as $i => $nature) {
            $naturesFormatted[$nature->name] = [
                'id'    => $nature->id,
                'color' => $casePalette[$i % count($casePalette)],
            ];
        }
 
        $topicsFormatted = [];
        foreach ($topics as $i => $topic) {
            $topicsFormatted[$topic->name] = [
                'id'    => $topic->id,
                'color' => !empty($topic->color) ? $topic->color : $taskPalette[$i % count($taskPalette)],
            ];
        }
 
        return [
            'regions'        => $regionData,
            'natures'        => $naturesFormatted,
            'topics'         => $topicsFormatted,
            'caseGrandTotal' => collect($regionData)->sum('caseTotal'),
            'taskGrandTotal' => collect($regionData)->sum('taskTotal'),
            'maxCaseTotal'   => max(1, collect($regionData)->max('caseTotal')),
            'maxTaskTotal'   => max(1, collect($regionData)->max('taskTotal')),
        ];
    }
}