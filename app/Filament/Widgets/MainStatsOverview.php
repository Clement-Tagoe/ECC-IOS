<?php

namespace App\Filament\Widgets;

use App\Models\CallLog;
use App\Models\Report;
use App\Models\Task;
use App\Models\ValidCase;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class MainStatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $reportsReceived = Report::whereBetween('date', [
                                now()->startOfMonth(),
                                now()->endOfMonth(),
                            ])
                            ->whereHas('receivers', fn ($q) => $q->where('users.id', Auth::id()))->count();

        $totalValidCases = ValidCase::whereDate('reporting_date', Carbon::today())->count();
        $totalValidCasesYesterday = ValidCase::whereDate('reporting_date', today()->subDay())->count();

        $dayTrend = $totalValidCasesYesterday > 0
            ? round((($totalValidCases - $totalValidCasesYesterday) / $totalValidCasesYesterday) * 100, 1)
            : 0;

        $stats = CallLog::where('date', Carbon::today())
            ->selectRaw('
                SUM(incoming_calls) as incoming,
                SUM(total_calls_received) as received,
                SUM(valid_calls) as valid,
                SUM(prank_calls) as prank,
                SUM(unanswered_calls) as unanswered
            ')
            ->first();

        $total   = $stats->received ?? 0;
        $valid   = $stats->valid ?? 0;
        $prank   = $stats->prank ?? 0;
        $prevTotal = $statsYesterday->received ?? 0;
 
        $validRate = $total > 0
            ? round(($valid / $total) * 100, 1)
            : 0;
 
        $prankRate = $total > 0
            ? round(($prank / $total) * 100, 1)
            : 0;
 
        $trend = $prevTotal > 0
            ? round((($total - $prevTotal) / $prevTotal) * 100, 1)
            : 0;
        
        $tasksCompleted = Task::whereBetween('created_at', [
                                now()->startOfMonth(),
                                now()->endOfMonth(),
                            ])
                            ->where('status', 'completed')->count();

        return [
            Stat::make('Reports Received', $reportsReceived)
                ->description('Reports received this month')
                ->color('auxiliary')
                ->icon('heroicon-o-document-arrow-down')
                ->chart([4, 11, 5, 10, 6, 4, 8, 11]),

            Stat::make('Total Valid Cases', $totalValidCases)
                ->description($dayTrend >= 0
                    ? "{$dayTrend}% vs yesterday"
                    : abs($dayTrend) . "% vs yesterday")
                ->descriptionIcon($dayTrend >= 0
                    ? 'heroicon-m-arrow-trending-up'
                    : 'heroicon-m-arrow-trending-down')
                ->icon('heroicon-o-briefcase')
                ->chart([6, 10, 5, 15, 3, 10, 7, 17]),

            Stat::make('Total Calls Received', $stats->received ?? 0)
                ->description($trend >= 0
                    ? "{$trend}% increase from yesterday"
                    : abs($trend) . "% decrease from yesterday")
                ->descriptionIcon($trend >= 0
                    ? 'heroicon-m-arrow-trending-up'
                    : 'heroicon-m-arrow-trending-down')
                ->color($trend >= 0 ? 'success' : 'danger')
                ->chart([10, 8, 5, 12, 6, 8, 4, 2]),
            
            Stat::make('All Tasks Completed', $tasksCompleted)
                ->description('Completed tasks this month')
                ->color('info')
                ->icon('heroicon-o-clipboard-document-check')
                ->chart([11, 13, 5, 15, 6, 7, 8, 14]),
            
        ];
    }
}
