<?php

namespace App\Filament\Resources\LogisticsManagement\Pages;

use App\Filament\Resources\LogisticsManagement\LogisticsManagementResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLogisticsManagement extends CreateRecord
{
    protected static string $resource = LogisticsManagementResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('view', ['record' => $this->getRecord()]);
    }
}
