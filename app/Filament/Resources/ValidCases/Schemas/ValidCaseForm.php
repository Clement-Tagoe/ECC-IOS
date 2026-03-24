<?php

namespace App\Filament\Resources\ValidCases\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class ValidCaseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make()
                    ->schema([
                        Section::make()
                            ->schema([
                                TextInput::make('case_id')
                                    ->label('Case ID')
                                    ->required(),
                                TimePicker::make('reporting_time')
                                    ->required(),
                                DatePicker::make('reporting_date')
                                    ->required(),
                                TextInput::make('location')
                                    ->datalist(\Ghaffaru\GhCities\City::all())
                                    ->required(),
                                Select::make('region')
                                    ->options([
                                            'Ahafo' => 'Ahafo',
                                            'Ashanti' => 'Ashanti',
                                            'Bono' => 'Bono',
                                            'Bono East' => 'Bono East',
                                            'Central' => 'Central',
                                            'Eastern' => 'Eastern',
                                            'Greater Accra' => 'Greater Accra',
                                            'North East' => 'North East',
                                            'Northern' => 'Northern',
                                            'Oti' => 'Oti',
                                            'Savannah' => 'Savannah',
                                            'Upper East' => 'Upper East',
                                            'Upper West' => 'Upper West',
                                            'Volta' => 'Volta',
                                            'Western' => 'Western',
                                            'Western North' => 'Western North',
                                        ])
                                    ->required(),
                                Select::make('agency_id')
                                    ->relationship('agency', 'name')
                                    ->required(), 
                            ])
                            ->columns(2),
                        Section::make()
                            ->schema([
                                RichEditor::make('description')
                                    ->columnSpan('full'),    
                            ])
                            ->columns(2),
                        Section::make()
                            ->schema([
                                TextInput::make('contact_name')
                                    ->required(),
                                TextInput::make('contact_number')
                                    ->required(),
                                TextInput::make('case_nature')
                                    ->datalist([
                                        'Theft',
                                        'Assault, Nuisance',
                                        'Dead Bodies/Unconscious',
                                        'Accident & Traffic issue',
                                        'Chaos, Fight, Threat',
                                        'Illegal drugs, Missing persons',
                                        'Domestic',
                                        'Vehicles',
                                        'Market/Shops/School',
                                        'Warehouse/office/Hospital',
                                        'Accident',
                                        'ECG Related',
                                        'Trees',
                                        'Patient Transfer',
                                        'Sick Person',
                                        'Dead Body',
                                        'Damaged Vehicle',
                                        'Flood',
                                        'Collapsed building',
                                        'Earth Tremor',
                                        'Pipe Leakage',
                                    ])
                                    ->required(),   
                            ])
                            ->columns(2),

                        Section::make()
                            ->schema([
                                Textarea::make('feedback_comment')
                                    ->required()
                                    ->columnSpanFull(),   
                            ])
                            ->columns(2),               
                
            ])
            ->columnSpan(['lg' => 2]),

            Group::make()
                    ->schema([
                        Section::make('Status')
                            ->schema([
                                Select::make('HOD')
                                    ->label('HOD')
                                    ->options([
                                        'Pending Review' => 'Pending Review',
                                        'Reviewed' => 'Reviewed',
                                    ])
                                    ->default('Pending Review'),
                                    // ->disabled(fn (): bool => !Auth::user->hasRole('admin'))
                                    // ->saved(),
                            ]),

                         Section::make('Personnel On Duty')
                            ->schema([
                                TextInput::make('created_by')
                                    ->default(Auth::user()->name) // Set to current user's name
                                    ->disabled() // Make the input non-editable
                                    ->saved()
                                    ->required(),
                            ])
                    ])
                    ->columnSpan(['lg' => 1]),
        ])->columns(3);
    }
}