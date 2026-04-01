<?php

namespace App\Filament\Resources\CommandCenterStaff\Pages;

use App\Filament\Resources\CommandCenterStaff\CommandCenterStaffResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCommandCenterStaff extends EditRecord
{
    protected static string $resource = CommandCenterStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
