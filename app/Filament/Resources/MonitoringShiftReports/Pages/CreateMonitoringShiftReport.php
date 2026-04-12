<?php

namespace App\Filament\Resources\MonitoringShiftReports\Pages;

use App\Filament\Resources\MonitoringShiftReports\MonitoringShiftReportResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMonitoringShiftReport extends CreateRecord
{
    protected static string $resource = MonitoringShiftReportResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('view', ['record' => $this->getRecord()]);
    }
}
