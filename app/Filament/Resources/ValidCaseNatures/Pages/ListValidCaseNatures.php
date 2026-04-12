<?php

namespace App\Filament\Resources\ValidCaseNatures\Pages;

use App\Filament\Resources\ValidCaseNatures\ValidCaseNatureResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListValidCaseNatures extends ListRecords
{
    protected static string $resource = ValidCaseNatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
