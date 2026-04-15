<?php

namespace App\Filament\Resources\CameraLocations\Pages;

use App\Filament\Resources\CameraLocations\CameraLocationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCameraLocation extends EditRecord
{
    protected static string $resource = CameraLocationResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
