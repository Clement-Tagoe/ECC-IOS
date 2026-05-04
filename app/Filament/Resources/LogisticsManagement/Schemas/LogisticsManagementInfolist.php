<?php

namespace App\Filament\Resources\LogisticsManagement\Schemas;


use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\RepeatableEntry\TableColumn;


class LogisticsManagementInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->columns(3)
                    ->columnSpanFull()
                    ->schema([
                            TextEntry::make('item'),
                            TextEntry::make('quantity'),
                            TextEntry::make('date'), 
                            ]),
                Section::make()
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

                Section::make('Logistics Distribution')
                    ->columnSpanFull()
                    ->schema([
                        RepeatableEntry::make('logisticsDistribution')
                            ->hiddenLabel()
                            ->table([
                                TableColumn::make('Department'),
                                TableColumn::make('Quantity')
                                    ->width(250),
                                TableColumn::make('Date')
                                    ->width(250),
                            ])
                            ->schema([
                                TextEntry::make('department'),
                                TextEntry::make('quantity'),
                                TextEntry::make('date'),
                            ])
                            ->columnSpanFull(),
                    ]),
                ]);
    }
}