<?php

namespace App\Filament\Resources\Tasks\Pages;

use App\Enums\TaskStatus;
use App\Filament\Resources\Tasks\TaskResource;
use App\Models\Task;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Builder;

class ListTasks extends ListRecords
{
    protected static string $resource = TaskResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make()
                ->icon(Heroicon::OutlinedClipboardDocumentCheck),
            'in progress' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', TaskStatus::InProgress))
                ->badge(Task::where('status', TaskStatus::InProgress)->count()),
            'completed' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', TaskStatus::Completed))
                ->badge(Task::where('status', TaskStatus::Completed)->count()),
            'in review' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', TaskStatus::InReview))
                ->badge(Task::where('status', TaskStatus::InReview)->count()),
            'reviewed' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', TaskStatus::Reviewed))
                ->badge(Task::where('status', TaskStatus::Reviewed)->count()),
            'cancelled' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', TaskStatus::Cancelled))
                ->badge(Task::where('status', TaskStatus::Cancelled)->count()),
        ];
    }
}
