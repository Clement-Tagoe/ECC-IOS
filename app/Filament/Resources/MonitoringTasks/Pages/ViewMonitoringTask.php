<?php

namespace App\Filament\Resources\MonitoringTasks\Pages;

use App\Enums\MonitoringTaskStatus;
use App\Filament\Resources\MonitoringTasks\MonitoringTaskResource;
use App\Models\MonitoringTask;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Forms\Components\ToggleButtons;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Enums\Width;
use Filament\Support\Icons\Heroicon;

class ViewMonitoringTask extends ViewRecord
{
    protected static string $resource = MonitoringTaskResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('change_status')
                ->icon(Heroicon::ArrowPathRoundedSquare)
                ->color('primary')
                ->modalWidth(Width::Medium)
                ->modalSubmitActionLabel('Save')
                ->stickyModalFooter()
                ->fillForm(fn (MonitoringTask $record): array => [
                    'status' => $record->status,
                ])
                ->schema([
                    ToggleButtons::make('status')
                        ->options(MonitoringTaskStatus::class)
                        ->inline()
                        ->required(),
                ])
                ->action(function (MonitoringTask $record, array $data): void {
                    $record->update($data);
                    $this->refreshFormData(['status']);
                }),
            EditAction::make(),
        ];
    }
}
