<?php

namespace App\Filament\Resources\CameraLocations\Pages;

use App\Filament\Resources\CameraLocations\CameraLocationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCameraLocations extends ListRecords
{
    protected static string $resource = CameraLocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
