<?php

namespace App\Filament\Resources\MonitoringConsoles\Pages;

use App\Filament\Resources\MonitoringConsoles\MonitoringConsoleResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMonitoringConsoles extends ListRecords
{
    protected static string $resource = MonitoringConsoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
