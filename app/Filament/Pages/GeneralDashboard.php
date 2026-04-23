<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\ReportsChart;
use App\Filament\Widgets\StatsOverview;
use App\Filament\Widgets\TaskChart;
use Filament\Pages\Dashboard as BaseDashboard;

class GeneralDashboard extends BaseDashboard
{
    protected static string $routePath = 'general';

    protected static ?string $title = 'General Dashboard';

    protected static ?int $navigationSort = -4;

    public function getWidgets(): array
    {
        return [
            StatsOverview::class,
            ReportsChart::class,
            TaskChart::class,
        ];
    }
}