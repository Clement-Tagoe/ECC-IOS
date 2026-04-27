<?php

namespace App\Listeners;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Wirechat\Wirechat\Events\MessageCreated;


class SendWirechatDatabaseNotification
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
    public function handle(MessageCreated $event): void
    {
        $message = $event->message;
        $sender = $message->sendable; // The user who sent it
        $conversation = $message->conversation;

        // Get recipients (everyone in the chat except the sender)
        $recipients = $conversation->participants()
            ->where('participant_id', '!=', $sender->id)
            ->get()
            ->pluck('participant'); 

        foreach ($recipients as $recipient) {
            Notification::make()
                ->title("New message from {$sender->name}")
                ->body(str($message->body)->limit(50))
                ->icon('heroicon-o-chat-bubble-left-right')
                ->iconColor('success')
                // This makes it show up in the Filament notification bell
                ->broadcast($recipient);
        }
    }
}
