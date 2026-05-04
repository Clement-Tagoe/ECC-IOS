<?php

namespace App\Filament\Resources\LogisticsManagement\Pages;

use App\Filament\Resources\LogisticsManagement\LogisticsManagementResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewLogisticsManagement extends ViewRecord
{
    protected static string $resource = LogisticsManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
