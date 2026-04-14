<?php

namespace App\Filament\Resources\CallStaff\Pages;

use App\Filament\Resources\CallStaff\CallStaffResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCallStaff extends ListRecords
{
    protected static string $resource = CallStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
