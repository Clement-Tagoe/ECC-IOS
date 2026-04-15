<?php

namespace App\Filament\Resources\CameraLocations\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CameraLocationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->unique()
                    ->required(),
            ]);
    }
}
