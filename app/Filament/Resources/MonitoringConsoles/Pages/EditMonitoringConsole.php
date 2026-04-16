<?php

namespace App\Filament\Resources\MonitoringConsoles\Pages;

use App\Filament\Resources\MonitoringConsoles\MonitoringConsoleResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditMonitoringConsole extends EditRecord
{
    protected static string $resource = MonitoringConsoleResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
