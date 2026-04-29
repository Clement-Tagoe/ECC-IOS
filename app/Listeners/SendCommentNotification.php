<?php

namespace App\Listeners;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Kirschbaum\Commentions\Events\UserIsSubscribedToCommentableEvent;

class SendCommentNotification implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(UserIsSubscribedToCommentableEvent $event): void
    {
        $comment = $event->comment;

        /** @var \App\Models\User $user */
        $user    = $event->user;

        $author     = $comment->commenter;
        $authorName = $author?->name ?? 'Someone';

        if ($user->id === $author?->id) {
            return;
        }

        Notification::make()
            ->title($authorName . ' commented')
            ->body(strip_tags($comment->comment))
            ->icon('heroicon-o-chat-bubble-left-right')
            ->actions([
                Action::make('view')
                    ->label('View')
                    ->url('/auth/')
                    ->markAsRead(),
            ])
            ->sendToDatabase($user, isEventDispatched: true);
    }
}