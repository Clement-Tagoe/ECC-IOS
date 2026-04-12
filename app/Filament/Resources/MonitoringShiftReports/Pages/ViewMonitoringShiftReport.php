<?php

namespace App\Filament\Resources\MonitoringShiftReports\Pages;

use App\Filament\Resources\MonitoringShiftReports\MonitoringShiftReportResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMonitoringShiftReport extends ViewRecord
{
    protected static string $resource = MonitoringShiftReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
