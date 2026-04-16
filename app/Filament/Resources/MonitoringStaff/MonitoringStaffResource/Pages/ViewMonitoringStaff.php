<?php

namespace App\Filament\Resources\MonitoringStaff\MonitoringStaffResource\Pages;

use App\Filament\Resources\MonitoringStaff\MonitoringStaffResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMonitoringStaff extends ViewRecord
{
    protected static string $resource = MonitoringStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
