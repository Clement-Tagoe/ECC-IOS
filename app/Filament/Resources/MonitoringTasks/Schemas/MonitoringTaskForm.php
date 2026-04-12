<?php

namespace App\Filament\Resources\MonitoringTasks\Schemas;

use App\Enums\MonitoringTaskStatus;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class MonitoringTaskForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Monitoring Task Details')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        DatePicker::make('date')
                            ->required(),
                        TimePicker::make('time')
                            ->helperText('Time event occured')
                            ->required(),
                        Select::make('shift')
                            ->options([
                                'Day' => 'Day',
                                'Night' => 'Night',
                            ])
                            ->required(),
                        Select::make('topics')
                            ->label('Topics/Areas of Interest')
                            ->helperText('Select one or more')
                            ->relationship('topics', 'name')
                            ->multiple()
                            ->searchable()
                            ->preload(),
                        ToggleButtons::make('status')
                            ->options(MonitoringTaskStatus::class)
                            ->inline()
                            ->required()
                            ->live()
                            ->default(MonitoringTaskStatus::InReview),
                        TextInput::make('location')
                            ->required(),
                        Select::make('region_id')
                            ->relationship('region', 'name'),
                        Select::make('camera_names')
                            ->relationship('cameras', 'camera_name')
                            ->helperText('Select one or more')
                            ->multiple()
                            ->searchable()
                            ->preload(),
                        RichEditor::make('observation')
                            ->required()
                            ->columnSpanFull(),
                        RichEditor::make('recommendation')
                            ->required()
                            ->columnSpanFull(),
                        SpatieMediaLibraryFileUpload::make('images')
                            ->collection('monitoring-images')
                            ->multiple()
                            ->image()
                            ->preserveFilenames()
                            ->maxFiles(4)
                            ->nullable(),
                    ])
            ]);
    }
}
