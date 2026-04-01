<?php

namespace App\Filament\Resources\CommandCenterStaff\Pages;

use App\Filament\Resources\CommandCenterStaff\CommandCenterStaffResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCommandCenterStaff extends ListRecords
{
    protected static string $resource = CommandCenterStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
