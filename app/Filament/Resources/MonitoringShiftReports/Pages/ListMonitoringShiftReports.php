<?php

namespace App\Filament\Resources\MonitoringShiftReports\Pages;

use App\Filament\Resources\MonitoringShiftReports\MonitoringShiftReportResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMonitoringShiftReports extends ListRecords
{
    protected static string $resource = MonitoringShiftReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
