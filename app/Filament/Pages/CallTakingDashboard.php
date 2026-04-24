<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\AgencyCaseLoadChart;
use App\Filament\Widgets\CallBreakdownChart;
use App\Filament\Widgets\CallStatsOverview;
use App\Filament\Widgets\CasesByNatureChart;
use App\Filament\Widgets\CasesByRegionChart;
use Filament\Pages\Dashboard as BaseDashboard;
use UnitEnum;

class CallTakingDashboard extends BaseDashboard
{
    protected static string $routePath = 'call-taking';

    protected static ?string $title = 'Call-Taking Dashboard';

    protected static ?int $navigationSort = -3;

    protected static string | UnitEnum | null $navigationGroup = 'Call-Taking';

    public function getWidgets(): array
    {
        return [
            CallStatsOverview::class,
            CallBreakdownChart::class,
            CasesByRegionChart::class,
            CasesByNatureChart::class,
            AgencyCaseLoadChart::class,
        ];
    }
}