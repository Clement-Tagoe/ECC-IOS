<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\GhanaRegionMapWidget;
use App\Filament\Widgets\MainStatsOverview;
use Filament\Pages\Dashboard as BaseDashboard;

class MainDashboard extends BaseDashboard
{
    protected static string $routePath = 'main-dashboard';

    protected static ?string $title = 'Main Dashboard';

    public function getWidgets(): array
    {
        return [
            // GhanaRegionMapWidget::class,
            MainStatsOverview::class,
            
            
        ];
    }
}