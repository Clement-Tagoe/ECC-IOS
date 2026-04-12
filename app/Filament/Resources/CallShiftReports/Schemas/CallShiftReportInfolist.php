<?php

namespace App\Filament\Resources\CallShiftReports\Schemas;


use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CallShiftReportInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Shift Details')
                    ->columns(3)
                    ->schema([
                            TextEntry::make('date'),
                            TextEntry::make('shift_type'),
                            TextEntry::make('expected_attendance')
                                ->numeric(), 
                            TextEntry::make('present')
                                ->numeric(), 
                            TextEntry::make('absent')
                                ->numeric(),
                            TextEntry::make('absent_with_permission')
                                ->numeric(),  
                            TextEntry::make('occupied_consoles')
                                ->numeric(), 
                            TextEntry::make('unoccupied_consoles')
                                ->numeric(), 
                            TextEntry::make('notes')
                                ->html()
                                ->columnSpanFull()
                            ]),
                Section::make('')
                    ->schema([
                            Group::make([
                                TextEntry::make('creator.name')
                                    ->label('Created by'), 
                                TextEntry::make('editor.name')
                                    ->label('Edited by'),
                                TextEntry::make('destroyer.name') 
                                    ->label('Deleted by')
                                ])->columns(3)->columnSpan(2),
                            Group::make([
                                TextEntry::make('created_at')
                                    ->dateTime(),
                                TextEntry::make('updated_at')
                                    ->dateTime(),
                                TextEntry::make('deleted_at')
                                    ->dateTime(),
                                ])->columns(3)->columnSpan(2),
                            ]),
                    ]);
    }
}