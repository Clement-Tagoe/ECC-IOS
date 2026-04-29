<?php

namespace App\Listeners;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Kirschbaum\Commentions\Events\UserWasMentionedEvent;

class SendMentionNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserWasMentionedEvent $event): void
    {
        $comment = $event->comment;
        /** @var \App\Models\User $user */
        $user    = $event->user;

        $author     = $comment->commenter;
        $authorName = $author?->name ?? 'Someone';

        Notification::make()
            ->title('You were mentioned by ' . $authorName)
            ->body(strip_tags($comment->comment))
            ->icon('heroicon-o-at-symbol')
            ->actions([
                Action::make('view')
                    ->label('View')
                    ->url('/auth/')
                    ->markAsRead(),
            ])
            ->sendToDatabase($user, isEventDispatched: true);
    }
}
