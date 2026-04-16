<?php

namespace App\Filament\Resources\CallConsoles\Pages;

use App\Filament\Resources\CallConsoles\CallConsoleResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCallConsole extends ViewRecord
{
    protected static string $resource = CallConsoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
