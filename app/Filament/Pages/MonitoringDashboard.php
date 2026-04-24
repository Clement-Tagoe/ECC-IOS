<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\CameraStatusByRegionChart;
use App\Filament\Widgets\MonitoringStatsOverview;
use App\Filament\Widgets\TopMonitoringTopicsChart;
use Filament\Pages\Dashboard as BaseDashboard;
use UnitEnum;

class MonitoringDashboard extends BaseDashboard
{
    protected static string $routePath = 'monitoring';

    protected static ?string $title = 'Monitoring Dashboard';

    protected static ?int $navigationSort = -2;

    protected static string | UnitEnum | null $navigationGroup = 'Monitoring';

     public function getWidgets(): array
    {
        return [
            MonitoringStatsOverview::class,
            CameraStatusByRegionChart::class,
            TopMonitoringTopicsChart::class,
        ];
    }
}