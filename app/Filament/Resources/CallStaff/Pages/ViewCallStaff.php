<?php

namespace App\Filament\Resources\CallStaff\Pages;

use App\Filament\Resources\CallStaff\CallStaffResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCallStaff extends ViewRecord
{
    protected static string $resource = CallStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
