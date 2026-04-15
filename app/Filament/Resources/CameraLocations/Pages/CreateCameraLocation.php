<?php

namespace App\Filament\Resources\CameraLocations\Pages;

use App\Filament\Resources\CameraLocations\CameraLocationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCameraLocation extends CreateRecord
{
    protected static string $resource = CameraLocationResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
