<?php

namespace App\Filament\Resources\ValidCases\Pages;

use App\Filament\Resources\ValidCases\ValidCaseResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewValidCase extends ViewRecord
{
    protected static string $resource = ValidCaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
