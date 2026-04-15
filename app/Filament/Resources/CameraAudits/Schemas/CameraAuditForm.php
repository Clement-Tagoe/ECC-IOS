<?php

namespace App\Filament\Resources\CameraAudits\Schemas;

use App\Enums\CameraStatus;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CameraAuditForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Camera Audit Details')
                    ->columns(2)
                    ->columnSpanFull()
                     ->schema([
                        Select::make('region_id')
                            ->relationship('region', 'name')
                            ->required(),
                        TextInput::make('camera_name')
                            ->required(),
                        Select::make('camera_location_id')
                            ->relationship('cameraLocation', 'name')
                            ->createOptionForm([
                                        TextInput::make('name')
                                            ->unique()
                                            ->required(),
                                    ])
                            ->live()
                            ->searchable()
                            ->preload(),
                        ToggleButtons::make('status')
                            ->options(CameraStatus::class)
                            ->inline()
                            ->required()
                            ->live()
                            ->default(CameraStatus::Online),
                        Select::make('observations')
                            ->relationship('observations', 'name')
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->unique()
                                    ->required(),
                            ])
                            ->multiple()
                            ->live()
                            ->searchable()
                            ->preload(),
                        RichEditor::make('notes')
                            ->columnSpanFull(),
                     ])
            ]);
    }
}

                        