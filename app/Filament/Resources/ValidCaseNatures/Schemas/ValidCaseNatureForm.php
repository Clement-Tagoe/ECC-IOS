<?php

namespace App\Filament\Resources\ValidCaseNatures\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ValidCaseNatureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->unique(ignoreRecord: true)
                    ->required(),
            ]);
    }
}
