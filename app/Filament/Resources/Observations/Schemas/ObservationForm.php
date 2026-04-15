<?php

namespace App\Filament\Resources\Observations\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ObservationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
            ]);
    }
}
