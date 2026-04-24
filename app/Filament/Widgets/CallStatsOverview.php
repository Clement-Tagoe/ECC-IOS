<?php

namespace App\Filament\Widgets;

use App\Models\CallLog;
use App\Models\CallShiftReport;
use App\Models\ValidCase;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CallStatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalValidCases = ValidCase::whereDate('reporting_date', Carbon::today())->count();
        $totalValidCasesYesterday = ValidCase::whereDate('reporting_date', today()->subDay())->count();
        
        $dayTrend = $totalValidCasesYesterday > 0
            ? round((($totalValidCases - $totalValidCasesYesterday) / $totalValidCasesYesterday) * 100, 1)
            : 0;

        // Sum each column for records matching today's date
        $stats = CallLog::whereDate('date', Carbon::today())
            ->selectRaw('
                SUM(incoming_calls) as incoming,
                SUM(total_calls_received) as received,
                SUM(valid_calls) as valid,
                SUM(prank_calls) as prank,
                SUM(unanswered_calls) as unanswered
            ')
            ->first();

        $statsYesterday = CallLog::whereDate('date', today()->subDay())
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

        $todayReports = CallShiftReport::where('date', Carbon::today())->get();
 
        $totalExpected  = $todayReports->sum('expected_attendance');
        $totalPresent   = $todayReports->sum('present');
        $totalAbsent    = $todayReports->sum('absent');

        $attendanceRate = $totalExpected > 0
            ? round(($totalPresent / $totalExpected) * 100, 1)
            : 0;
        
        $last7Attendance = collect(range(6, 0))->map(function ($daysAgo) {
            $reports = CallShiftReport::whereDate('date', today()->subDays($daysAgo))->get();
            $expected = $reports->sum('expected_attendance');
            $present  = $reports->sum('present');
            return $expected > 0 ? round(($present / $expected) * 100) : 0;
        })->toArray();

        return [
           Stat::make('Total Valid Cases', $totalValidCases)
                ->description($dayTrend >= 0
                    ? "{$dayTrend}% vs yesterday"
                    : abs($dayTrend) . "% vs yesterday")
                ->descriptionIcon($dayTrend >= 0
                    ? 'heroicon-m-arrow-trending-up'
                    : 'heroicon-m-arrow-trending-down')
                ->icon('heroicon-o-briefcase')
                ->chart([6, 10, 5, 15, 3, 10, 7, 17]),
            Stat::make('Incoming Calls', $stats->incoming ?? 0)
                ->icon('heroicon-o-phone-arrow-down-left')
                ->color('auxiliary')
                ->chart([18, 15, 5, 10, 6, 8, 4, 9]),
            Stat::make('Total Received', $stats->received ?? 0)
                ->description($trend >= 0
                    ? "{$trend}% increase from yesterday"
                    : abs($trend) . "% decrease from yesterday")
                ->descriptionIcon($trend >= 0
                    ? 'heroicon-m-arrow-trending-up'
                    : 'heroicon-m-arrow-trending-down')
                ->color($trend >= 0 ? 'success' : 'danger')
                ->chart([10, 8, 5, 12, 6, 8, 4, 2]),
            Stat::make('Valid Calls', $stats->valid ?? 0)
                ->description("{$validRate}% validity rate today")
                ->icon('heroicon-o-check-circle')
                ->color('nonary')
                ->chart([9, 10, 8, 10, 6, 9, 4, 7]),
            Stat::make('Prank Calls', $stats->prank ?? 0)
                ->description("{$prankRate}% of all received calls")
                ->icon('heroicon-o-phone-x-mark')
                ->color('primary')
                ->chart([14, 10, 3, 7, 6, 9, 4, 10]),
            // Stat::make('Unanswered Calls', $stats->unanswered ?? 0),
            Stat::make('Expected Attendance', number_format($totalExpected))
                ->description('Across all shifts today')
                ->descriptionIcon('heroicon-m-users')
                ->color('gray'),
            Stat::make('Staff Present', number_format($totalPresent))
                ->description("{$attendanceRate}% attendance rate")
                ->descriptionIcon('heroicon-m-check-badge')
                ->color($attendanceRate >= 85 ? 'success' : ($attendanceRate >= 70 ? 'warning' : 'danger'))
                ->chart($last7Attendance),
 
            Stat::make('Staff Absent', number_format($totalAbsent))
                ->description(round(100 - $attendanceRate, 1) . '% absence rate today')
                ->descriptionIcon('heroicon-m-x-mark')
                ->color($totalAbsent > 5 ? 'danger' : 'warning'),
            
        ];
    }

    public function getColumns(): int | array
    {
        return [
            'md' => 3,
            'xl' => 4,
        ];
    }
}
