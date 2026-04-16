<?php

namespace App\Filament\Resources\MonitoringStaff\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MonitoringStaffForm
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
