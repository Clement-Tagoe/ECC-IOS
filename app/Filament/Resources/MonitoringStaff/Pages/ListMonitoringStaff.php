<?php

namespace App\Filament\Resources\MonitoringStaff\Pages;

use App\Filament\Resources\MonitoringStaff\MonitoringStaffResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMonitoringStaff extends ListRecords
{
    protected static string $resource = MonitoringStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
