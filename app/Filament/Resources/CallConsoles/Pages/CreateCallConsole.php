<?php

namespace App\Filament\Resources\CallConsoles\Pages;

use App\Filament\Resources\CallConsoles\CallConsoleResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCallConsole extends CreateRecord
{
    protected static string $resource = CallConsoleResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
