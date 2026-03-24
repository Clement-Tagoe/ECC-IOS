<?php

namespace App\Filament\Resources\CallLogs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;
use Filament\Schemas\Components\Section;

class CallLogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Calls')
                    ->description('Breakdown of all calls')
                    ->schema([
                        TextInput::make('incoming_calls')
                            ->required()
                            ->numeric(),
                        TextInput::make('total_calls_received')
                            ->required()
                            ->numeric(),
                        TextInput::make('valid_calls')
                            ->required()
                            ->numeric(),
                        TextInput::make('prank_calls')
                            ->required()
                            ->numeric(),
                        TextInput::make('unanswered_calls')
                            ->required()
                            ->numeric(),
                    ])->columns(2)->columnSpan(1),

                Section::make('Duty Details & Duration')
                    ->description('Details of User, time & date of shift')
                    ->schema([
                        Select::make('shift')
                            ->options([
                                'Day' => 'Day',
                                'Night' => 'Night',
                            ])->required(),
                        DatePicker::make('date')
                            ->required(),
                        TimePicker::make('start_time')
                            ->required(),
                        TimePicker::make('end_time')
                            ->required(),
                        TextInput::make('created_by')
                            ->default(Auth::user()->name) // Set to current user's name
                            ->disabled() // Make the input non-editable
                            ->saved()
                            ->required(),
                        ])->columns(2)->columnSpan(1),

                Section::make('HOD Review')
                    ->description('Review by Head of Department')
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
                        ])->columns(2)->columnSpan(1),
                    
                
            ]);
    }
}
