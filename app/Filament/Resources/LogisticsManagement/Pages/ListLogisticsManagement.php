<?php

namespace App\Filament\Resources\LogisticsManagement\Pages;

use App\Filament\Resources\LogisticsManagement\LogisticsManagementResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLogisticsManagement extends ListRecords
{
    protected static string $resource = LogisticsManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('New stock'),
        ];
    }
}
