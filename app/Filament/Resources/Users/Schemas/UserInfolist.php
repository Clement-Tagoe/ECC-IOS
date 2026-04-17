<?php

namespace App\Filament\Resources\Users\Schemas;


use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('User Details')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Group::make([
                                    TextEntry::make('name'),
                                    TextEntry::make('email'),
                                    TextEntry::make('contact'), 
                                ]),
                                Group::make([
                                    TextEntry::make('roles.name')
                                        ->label('Role(s)'),
                                    TextEntry::make('department.name')
                                        ->label('Deparment'),
                                ]),
                            ]),
                        ]),
                Section::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Group::make([
                                    TextEntry::make('creator.name')
                                        ->label('Created by'), 
                                    TextEntry::make('editor.name')
                                        ->label('Edited by'), 
                                    TextEntry::make('destroyer.name')
                                        ->label('Deleted by'), 
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
                            ]),
                    ]);
    }
}