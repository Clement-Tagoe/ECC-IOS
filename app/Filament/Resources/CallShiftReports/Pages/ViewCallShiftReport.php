<?php

namespace App\Filament\Resources\CallShiftReports\Pages;

use App\Enums\ShiftStatus;
use App\Filament\Resources\CallShiftReports\CallShiftReportResource;
use App\Models\CallShiftReport;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Forms\Components\ToggleButtons;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Enums\Width;
use Filament\Support\Icons\Heroicon;

class ViewCallShiftReport extends ViewRecord
{
    protected static string $resource = CallShiftReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('change_status')
                ->icon(Heroicon::ArrowPathRoundedSquare)
                ->color('primary')
                ->modalWidth(Width::Medium)
                ->modalSubmitActionLabel('Save')
                ->stickyModalFooter()
                ->fillForm(fn (CallShiftReport $record): array => [
                    'status' => $record->status,
                ])
                ->schema([
                    ToggleButtons::make('status')
                        ->options(ShiftStatus::class)
                        ->inline()
                        ->required(),
                ])
                ->action(function (CallShiftReport $record, array $data): void {
                    $record->update($data);
                    $this->refreshFormData(['status']);
                }),
            EditAction::make(),
        ];
    }
}
