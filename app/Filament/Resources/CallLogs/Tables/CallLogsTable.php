<?php

namespace App\Filament\Resources\CallLogs\Tables;

use Carbon\Carbon;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\Indicator;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class CallLogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('incoming_calls')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('total_calls_received')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('valid_calls')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('prank_calls')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('unanswered_calls')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('HOD')
                    ->label('HOD')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Pending Review' => 'warning',
                        'Reviewed' => 'success',
                    }),
                TextColumn::make('shift')
                    ->searchable(),
                TextColumn::make('start_time')
                    ->time()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('end_time')
                    ->time()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('date')
                    ->date(),
                TextColumn::make('created_by')
                    ->searchable(),
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
                Filter::make('date')
                    ->schema([
                        DatePicker::make('created_from')
                            ->default(Carbon::today()->subDays(5)),
                        DatePicker::make('created_until')
                            ->default(Carbon::today()),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('date', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('date', '<=', $date),
                            );
                    })
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];

                        if ($data['created_from'] ?? null) {
                            $indicators[] = Indicator::make('Created from ' . Carbon::parse($data['created_from'])->toFormattedDateString());
                        }

                        if ($data['created_until'] ?? null) {
                            $indicators[] = Indicator::make('Created until ' . Carbon::parse($data['created_until'])->toFormattedDateString());
                        }

                        return $indicators;
                    })->columnSpan(2)->columns(2),
                SelectFilter::make('shift')
                        ->options([
                            'Day' => 'Day',
                            'Night' => 'Night',
                        ]),
            ], layout: FiltersLayout::AboveContent)
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
