<?php

namespace App\Filament\Resources\MonitoringTasks\Pages;

use App\Filament\Resources\MonitoringTasks\MonitoringTaskResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateMonitoringTask extends CreateRecord
{
    protected static string $resource = MonitoringTaskResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('view', ['record' => $this->getRecord()]);
    }
}
