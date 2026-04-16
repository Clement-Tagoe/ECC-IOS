<?php

namespace App\Filament\Resources\MonitoringConsoles\Pages;

use App\Filament\Resources\MonitoringConsoles\MonitoringConsoleResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMonitoringConsole extends CreateRecord
{
    protected static string $resource = MonitoringConsoleResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
