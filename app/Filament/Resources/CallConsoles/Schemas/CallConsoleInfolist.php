<?php

namespace App\Filament\Resources\CallConsoles\Schemas;


use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CallConsoleInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Console Details')
                    ->columns(3)
                    ->columnSpanFull()
                    ->schema([
                            TextEntry::make('console_name'),
                            TextEntry::make('status')
                                ->badge(),
                            TextEntry::make('assignee.name')
                                ->label('Assigned To'), 
                            TextEntry::make('notes')
                                ->html(),
                            ]),
                Section::make('')
                    ->columnSpanFull()
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