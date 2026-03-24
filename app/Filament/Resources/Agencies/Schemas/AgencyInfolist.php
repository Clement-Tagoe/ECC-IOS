<?php

namespace App\Filament\Resources\Agencies\Schemas;


use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AgencyInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Agency Headquaters')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Group::make([
                                    TextEntry::make('name')
                                        ->icon('heroicon-o-building-office'),
                                    TextEntry::make('contact')
                                        ->icon('heroicon-o-phone'),
                                    TextEntry::make('email')
                                        ->icon('heroicon-o-envelope'), 
                                ]),
                                Group::make([
                                    TextEntry::make('location')
                                        ->icon('heroicon-o-map-pin'),
                                    TextEntry::make('website')
                                        ->icon('heroicon-o-globe-alt'),
                                ]),
                            ]),
                        ]),
            ]);
    }
}