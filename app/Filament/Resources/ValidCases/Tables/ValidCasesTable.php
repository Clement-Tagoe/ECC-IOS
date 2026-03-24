<?php

namespace App\Filament\Resources\ValidCases\Tables;

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

class ValidCasesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('reporting_date', 'desc')
            ->columns([
                TextColumn::make('case_id')
                    ->label('Case ID')
                    ->searchable(),
                TextColumn::make('reporting_time')
                    ->time()
                    ->sortable(),
                TextColumn::make('reporting_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('agency.name')
                    ->searchable(),
                TextColumn::make('location')
                    ->searchable(),
                TextColumn::make('HOD')
                    ->label('HOD')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Pending Review' => 'warning',
                        'Reviewed' => 'success',
                    }),
                TextColumn::make('region')
                    ->searchable(),
                TextColumn::make('contact_name')
                    ->searchable(),
                TextColumn::make('contact_number')
                    ->searchable(),
                TextColumn::make('case_nature')
                    ->searchable(),
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
                        DatePicker::make('created_from'),
                            // ->default(Carbon::today()->subDays(5)),
                        DatePicker::make('created_until'),
                            // ->default(Carbon::today()),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('reporting_date', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('reporting_date', '<=', $date),
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
                SelectFilter::make('agency')
                        ->relationship('agency', 'name'),
                SelectFilter::make('region')
                        ->options([
                            'Ahafo' => 'Ahafo',
                            'Ashanti' => 'Ashanti',
                            'Bono' => 'Bono',
                            'Bono East' => 'Bono East',
                            'Central' => 'Central',
                            'Eastern' => 'Eastern',
                            'Greater Accra' => 'Greater Accra',
                            'North East' => 'North East',
                            'Northern' => 'Northern',
                            'Oti' => 'Oti',
                            'Savannah' => 'Savannah',
                            'Upper East' => 'Upper East',
                            'Upper West' => 'Upper West',
                            'Volta' => 'Volta',
                            'Western' => 'Western',
                            'Western North' => 'Western North',
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
