<?php

namespace App\Filament\Resources\CommandCenterStaff\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CommandCenterStaffForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Employee Details')
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        Select::make('section_id')
                            ->relationship('section', 'name')
                            ->required(),
                        Toggle::make('is_active')
                            ->default(true)
                            ->required(),
                    ])
               
            ]);
    }
}
