<?php

namespace App\Filament\Resources\ValidCases\Pages;

use App\Enums\ValidCaseStatus;
use App\Filament\Resources\ValidCases\ValidCaseResource;
use App\Models\ValidCase;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Forms\Components\ToggleButtons;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Enums\Width;
use Filament\Support\Icons\Heroicon;

class ViewValidCase extends ViewRecord
{
    protected static string $resource = ValidCaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('change_status')
                ->icon(Heroicon::ArrowPathRoundedSquare)
                ->color('primary')
                ->modalWidth(Width::Medium)
                ->modalSubmitActionLabel('Save')
                ->stickyModalFooter()
                ->fillForm(fn (ValidCase $record): array => [
                    'status' => $record->status,
                ])
                ->schema([
                    ToggleButtons::make('status')
                        ->options(ValidCaseStatus::class)
                        ->inline()
                        ->required(),
                ])
                ->action(function (ValidCase $record, array $data): void {
                    $record->update($data);
                    $this->refreshFormData(['status']);
                }),
            EditAction::make(),
        ];
    }
}
