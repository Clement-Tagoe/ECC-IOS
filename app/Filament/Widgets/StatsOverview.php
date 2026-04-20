<?php

namespace App\Filament\Widgets;

use App\Models\Report;
use App\Models\Task;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $taskAssigned = Task::whereHas('collaborators', fn ($q) => $q->where('users.id', Auth::id()))->count();

        $tasksCompleted = Task::where('status', 'completed')
            ->whereHas('collaborators', function ($query) {
                $query->where('users.id', Auth::id());
            })
            ->count();
        $reportsSent = Report::where('user_id', Auth::id())->count();

        $reportsReceived = Report::whereHas('receivers', fn ($q) => $q->where('users.id', Auth::id()))->count();

        return [
            Stat::make('Reports Sent', $reportsSent)
                ->description('Sent Reports')
                ->color('success')
                ->icon('heroicon-o-document-arrow-up')
                ->chart([18, 15, 5, 10, 6, 8, 4, 9]),

            Stat::make('Reports Received', $reportsReceived)
                ->description('Received Reports')
                ->color('auxiliary')
                ->icon('heroicon-o-document-arrow-down')
                ->chart([4, 11, 5, 10, 6, 4, 8, 11]),
            
            Stat::make('Tasks Assigned', $taskAssigned)
                ->description('Tasks Assigned')
                ->color('nonary')
                ->icon('heroicon-o-clipboard-document')
                ->chart([18, 13, 5, 20, 6, 7, 8, 10]),

            Stat::make('Tasks Completed', $tasksCompleted)
                ->description('Completed Tasks')
                ->color('info')
                ->icon('heroicon-o-clipboard-document-check')
                ->chart([11, 13, 5, 15, 6, 7, 8, 14]),

        ];
    }
}
