<?php

namespace App\Filament\Resources\CallConsoles\Schemas;

use App\Enums\ConsoleStatus;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CallConsoleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Console Details')
                    ->columns(1)
                    ->columnSpan(1)
                     ->schema([
                        TextInput::make('console_name')
                            ->unique()
                            ->required(),
                        ToggleButtons::make('status')
                            ->options(ConsoleStatus::class)
                            ->inline()
                            ->required()
                            ->live()
                            ->default(ConsoleStatus::Operational),
                        Select::make('call_staff_id')
                            ->relationship('assignee', 'name')
                            ->searchable()
                            ->preload()
                            ->live()
                            ->nullable()
                            ->placeholder('Unassigned'),
                     ])
            ]);
    }
}
