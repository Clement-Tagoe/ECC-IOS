<?php

namespace App\Filament\Resources\Tasks\Pages;

use App\Filament\Resources\Tasks\TaskResource;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateTask extends CreateRecord
{
    protected static string $resource = TaskResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::id();

        return $data;
    }

    protected function afterCreate(): void
    {
        $task= $this->record;

       if ($task->collaborators->isNotEmpty()) {
            foreach ($task->collaborators as $user) {
                Notification::make()
                    ->title('New Task assigned by '. $task->user->name)
                    ->body('Title: ' . $task->title)
                    ->actions([
                        Action::make('Mark as read')
                            ->button()
                            ->markAsRead()
                            ->close(),
                        Action::make('View')
                            ->button()
                            ->url(TaskResource::getUrl('view', ['record' => $task]))
                            ->markAsRead()
                            ->close(),
                    ])
                    ->sendToDatabase($user);
                }
        }
    }
}
