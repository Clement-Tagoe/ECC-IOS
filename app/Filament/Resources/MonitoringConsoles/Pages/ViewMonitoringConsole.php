<?php

namespace App\Filament\Resources\MonitoringConsoles\Pages;

use App\Filament\Resources\MonitoringConsoles\MonitoringConsoleResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMonitoringConsole extends ViewRecord
{
    protected static string $resource = MonitoringConsoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
