<?php

namespace App\Filament\Resources\CallStaff\Pages;

use App\Filament\Resources\CallStaff\CallStaffResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCallStaff extends CreateRecord
{
    protected static string $resource = CallStaffResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
