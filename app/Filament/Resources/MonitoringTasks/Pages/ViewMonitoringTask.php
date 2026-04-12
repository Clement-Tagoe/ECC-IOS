<?php

namespace App\Filament\Resources\MonitoringTasks\Pages;

use App\Filament\Resources\MonitoringTasks\MonitoringTaskResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMonitoringTask extends ViewRecord
{
    protected static string $resource = MonitoringTaskResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
