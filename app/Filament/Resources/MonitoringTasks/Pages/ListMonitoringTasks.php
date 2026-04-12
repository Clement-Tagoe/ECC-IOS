<?php

namespace App\Filament\Resources\MonitoringTasks\Pages;

use App\Filament\Resources\MonitoringTasks\MonitoringTaskResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMonitoringTasks extends ListRecords
{
    protected static string $resource = MonitoringTaskResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
