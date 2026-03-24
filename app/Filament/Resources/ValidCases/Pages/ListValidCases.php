<?php

namespace App\Filament\Resources\ValidCases\Pages;

use App\Filament\Resources\ValidCases\ValidCaseResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListValidCases extends ListRecords
{
    protected static string $resource = ValidCaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
