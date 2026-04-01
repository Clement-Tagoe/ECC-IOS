<?php

namespace App\Filament\Resources\ShiftReports\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ShiftReportsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('date')
                    ->date()
                    ->sortable(),
                TextColumn::make('shift_type')
                    ->searchable(),
                TextColumn::make('section.name')
                    ->searchable(),
                TextColumn::make('expected_attendance')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('present')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('absent')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('absent_with_permission')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('occupied_consoles')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
