<?php

namespace App\Filament\Resources\Tasks\Pages;

use App\Enums\ReportPriority;
use App\Enums\ReportStatus;
use App\Filament\Resources\Tasks\TaskResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Resources\Pages\ViewRecord;

class ViewTask extends ViewRecord
{
    protected static string $resource = TaskResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
            Action::make('Add Report')
                ->label('Add Report')
                ->schema([
                    TextInput::make('title')
                        ->required(),
                    DatePicker::make('date')
                        ->required(),
                    Select::make('type')
                        ->options([
                            'General' => 'General',
                            'Monitoring' => 'Monitoring',
                            'Incident' => 'Incident',
                            'Analysis' => 'Analysis',
                            'Field' => 'Field',
                            'Evaluation' => 'Evaluation',
                        ])
                        ->required(),
                    Select::make('shift')
                        ->options([
                            'Day' => 'Day',
                            'Night' => 'Night',
                        ])
                        ->required(),
                    ToggleButtons::make('status')
                        ->options(ReportStatus::class)
                        ->inline()
                        ->required()
                        ->live()
                        ->default(ReportStatus::InReview),
                    Select::make('department_id')
                        ->relationship('department', 'name'),
                    Radio::make('priority')
                        ->options(ReportPriority::class)
                        ->inline()
                        ->required()
                        ->default(ReportPriority::Medium),
                    RichEditor::make('description')
                        ->required()
                        ->columnSpanFull(),
                    Select::make('collaborators')
                        ->relationship('collaborators', 'name')
                        ->multiple()
                        ->searchable()
                        ->preload()
                        ->nullable(),
                    Select::make('receivers')
                        ->label('Send To (Receivers)')
                        ->relationship('receivers', 'name')   // assuming User has 'name' column
                        ->multiple()
                        ->searchable()
                        ->preload()
                        ->required(),
                    SpatieMediaLibraryFileUpload::make('images')
                        ->collection('report-images')
                        ->multiple()
                        ->image()
                        ->preserveFilenames()
                        ->maxFiles(4)
                        ->nullable(),
                    SpatieMediaLibraryFileUpload::make('files/videos')
                        ->collection('report-files')
                        ->multiple()
                        ->preserveFilenames()
                        ->nullable(),
                ])
                ->action(function (array $data) {
                    $this->record->reports()->create($data);
                }),
        ];
    }
}
