<?php

namespace App\Filament\Resources\MonitoringStaff\Pages;

use App\Filament\Resources\MonitoringStaff\MonitoringStaffResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMonitoringStaff extends CreateRecord
{
    protected static string $resource = MonitoringStaffResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
