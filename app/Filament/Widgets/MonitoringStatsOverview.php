<?php

namespace App\Filament\Widgets;

use App\Models\CameraAudit;
use App\Models\MonitoringShiftReport;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MonitoringStatsOverview extends StatsOverviewWidget
{

    protected function getStats(): array
    {
        $todayReports = MonitoringShiftReport::where('date', Carbon::today())->get();
        
        $totalExpected  = $todayReports->sum('expected_attendance');
        $totalPresent   = $todayReports->sum('present');
        $totalAbsent    = $todayReports->sum('absent');

        $attendanceRate = $totalExpected > 0
            ? round(($totalPresent / $totalExpected) * 100, 1)
            : 0;
        
        $last7Attendance = collect(range(6, 0))->map(function ($daysAgo) {
            $reports = MonitoringShiftReport::whereDate('date', today()->subDays($daysAgo))->get();
            $expected = $reports->sum('expected_attendance');
            $present  = $reports->sum('present');
            return $expected > 0 ? round(($present / $expected) * 100) : 0;
        })->toArray();
    
        $cameraAudits = CameraAudit::whereDate('updated_at', now()->toDateString())->count();
      

        return [
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

            Stat::make('Audited Cameras', number_format($cameraAudits))
                ->description('Total number of cameras audited today')
                ->descriptionIcon('heroicon-o-camera')
                ->color('info')
                ->chart([6, 10, 5, 15, 3, 10, 7, 17]),
        ];
    }
}
