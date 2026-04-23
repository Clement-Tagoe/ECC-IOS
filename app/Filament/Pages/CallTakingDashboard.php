<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\CallBreakdownChart;
use App\Filament\Widgets\CallStatsOverview;
use App\Filament\Widgets\CasesByRegionChart;
use Filament\Pages\Dashboard as BaseDashboard;

class CallTakingDashboard extends BaseDashboard
{
    protected static string $routePath = 'call-taking';

    protected static ?string $title = 'Call-Taking Dashboard';

    protected static ?int $navigationSort = -3;

    public function getWidgets(): array
    {
        return [
            CallStatsOverview::class,
            CallBreakdownChart::class,
            CasesByRegionChart::class,
        ];
    }
}