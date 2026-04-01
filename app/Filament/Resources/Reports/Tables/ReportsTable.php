<?php

namespace App\Filament\Resources\Reports\Tables;

use App\Enums\ReportPriority;
use App\Enums\ReportStatus;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ReportsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('Sent By')
                    ->searchable(),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::Medium)
                    ->limit(40),
                TextColumn::make('type')
                    ->searchable(),
                TextColumn::make('date')
                    ->date()
                    ->sortable(),
                TextColumn::make('priority')
                    ->badge(),
                TextColumn::make('status')
                    ->badge(),
                TextColumn::make('receivers.name')
                    ->label('Sent To')
                    ->badge()
                    ->color('gray'),
                TextColumn::make('attachments_count')
                    ->label('Attachments')
                    ->getStateUsing(fn ($record) => $record->media->count())
                    ->badge()
                    ->color(fn ($state) => $state > 0 ? 'info' : 'success')
                    ->sortable(false)   // counting is not easily sortable without extra work
                    ->alignCenter(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options(ReportStatus::class),

                SelectFilter::make('priority')
                    ->options(ReportPriority::class),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
