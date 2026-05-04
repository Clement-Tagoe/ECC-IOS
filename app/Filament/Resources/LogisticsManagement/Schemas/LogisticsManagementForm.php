<?php

namespace App\Filament\Resources\LogisticsManagement\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Repeater\TableColumn;


class LogisticsManagementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                 Section::make('Procurement Details')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('item')
                            ->required(),
                        TextInput::make('quantity')
                            ->required(),
                        DatePicker::make('date')
                            ->required(),
                    ]),

                Section::make('Logistics Distribution')
                    ->columnSpanFull()
                    ->schema([
                        Repeater::make('logisticsDistribution')
                            ->hiddenLabel()
                            ->relationship()
                            ->defaultItems(1)
                            ->table([
                                TableColumn::make('Department'),
                                TableColumn::make('Quantity')
                                    ->width(250),
                                TableColumn::make('Date')
                                    ->width(250),
                            ])
                            ->schema([
                                TextInput::make('department'),
                                TextInput::make('quantity'),
                                DatePicker::make('date'),
                            ])
                            ->columnSpanFull(),
                    ]),

            ]);
    }
}
