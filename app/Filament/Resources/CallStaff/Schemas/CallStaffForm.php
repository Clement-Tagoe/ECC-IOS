<?php

namespace App\Filament\Resources\CallStaff\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CallStaffForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('group')
                    ->required(),
            ]);
    }
}
