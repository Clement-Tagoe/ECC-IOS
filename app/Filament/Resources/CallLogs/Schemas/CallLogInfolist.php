<?php

namespace App\Filament\Resources\CallLogs\Schemas;


use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CallLogInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Calls')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Group::make([
                                    TextEntry::make('incoming_calls')
                                        ->numeric(),
                                    TextEntry::make('total_calls_received')
                                        ->numeric(),
                                    TextEntry::make('valid_calls')
                                        ->numeric(), 
                                ]),
                                Group::make([
                                    TextEntry::make('prank_calls')
                                        ->numeric(),
                                    TextEntry::make('unanswered_calls')
                                        ->numeric(),
                                ]),
                            ]),
                        ]),
                Section::make('Duty Details & Duration')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Group::make([
                                    TextEntry::make('shift'),
                                    TextEntry::make('date'),
                                    TextEntry::make('start_time'),
                                    TextEntry::make('end_time'), 
                                    ])->columns(3)->columnSpan(2),
                                Group::make([
                                    TextEntry::make('created_by'),
                                    TextEntry::make('created_at')
                                        ->dateTime(),
                                    TextEntry::make('updated_at')
                                        ->dateTime(), 
                                    ])->columns(3)->columnSpan(2),
                                ]),
                            ]),
                Section::make('HOD Review')
                    ->schema([
                            TextEntry::make('HOD')
                                ->label('HOD')
                                ->badge()
                                ->color(fn (string $state): string => match ($state) {
                                    'Pending Review' => 'warning',
                                    'Reviewed' => 'success',
                            }),

                        ]),
                    ]);
    }
}