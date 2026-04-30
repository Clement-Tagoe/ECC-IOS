<?php

namespace App\Filament\Resources\Tasks\Pages;

use App\Enums\TaskStatus;
use App\Filament\Resources\Tasks\TaskResource;
use App\Models\Task;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Forms\Components\ToggleButtons;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Enums\Width;
use Filament\Support\Icons\Heroicon;

class ViewTask extends ViewRecord
{
    protected static string $resource = TaskResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('change_status')
                ->icon(Heroicon::ArrowPathRoundedSquare)
                ->color('primary')
                ->modalWidth(Width::Medium)
                ->modalSubmitActionLabel('Save')
                ->stickyModalFooter()
                ->fillForm(fn (Task $record): array => [
                    'status' => $record->status,
                ])
                ->schema([
                    ToggleButtons::make('status')
                        ->options(TaskStatus::class)
                        ->inline()
                        ->required(),
                ])
                ->action(function (Task $record, array $data): void {
                    $record->update($data);
                    $this->refreshFormData(['status']);
                }),
            EditAction::make(),
        ];
    }
}
