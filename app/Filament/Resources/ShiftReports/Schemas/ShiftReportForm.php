<?php

namespace App\Filament\Resources\ShiftReports\Schemas;

use App\Enums\ShiftType;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ShiftReportForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Shift Report Details')
                    ->columns(3)
                    ->columnSpanFull()
                    ->schema([
                        DatePicker::make('date')
                            ->required(),
                        Select::make('section_id')
                            ->relationship('section', 'name')
                            ->required(),
                        ToggleButtons::make('shift_type')
                            ->options(ShiftType::class)
                            ->inline()
                            ->required()
                            ->live()
                            ->default(ShiftType::Morning),
                        
                        TextInput::make('expected_attendance')
                            ->required()
                            ->numeric(),
                        TextInput::make('present')
                            ->required()
                            ->numeric(),
                        TextInput::make('absent')
                            ->required()
                            ->numeric(),
                        TextInput::make('absent_with_permission')
                            ->required()
                            ->numeric(),
                        TextInput::make('occupied_consoles')
                            ->required()
                            ->numeric(),
                        RichEditor::make('notes')
                            ->columnSpanFull(),
                ]) 
            ]);
    }
}
