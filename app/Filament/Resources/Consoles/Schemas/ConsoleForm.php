<?php

namespace App\Filament\Resources\Consoles\Schemas;

use App\Enums\ConsoleStatus;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ConsoleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Report Details')
                    ->columns(2)
                    ->columnSpanFull()
                     ->schema([
                        Select::make('section_id')
                            ->relationship('section', 'name')
                            ->required(),
                        TextInput::make('identifier')
                            ->required(),
                        ToggleButtons::make('status')
                            ->options(ConsoleStatus::class)
                            ->inline()
                            ->required()
                            ->live()
                            ->default(ConsoleStatus::Operational),
                        Select::make('command_center_staff_id')
                            ->relationship('assignee', 'name')
                            ->searchable()
                            ->preload()
                            ->placeholder('Unassigned'),
                        RichEditor::make('notes')
                            ->columnSpanFull(),
                     ])
            ]);
    }
}
