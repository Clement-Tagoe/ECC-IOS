<?php

namespace App\Observers;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Wirechat\Wirechat\Models\Message;

class MessageObserver
{
    public function created(Message $message): void
    {
        $conversation = $message->conversation;

        if ($conversation->isSelf()) {
            return;
        }

        $senderParticipant = $message->participant;
        $senderClass       = $senderParticipant?->participantable_type;
        $sender            = $senderClass ? $senderClass::find($senderParticipant->participantable_id) : null;
        $senderName        = $sender?->name ?? 'Someone';

        $conversation->participants()
            ->where('id', '!=', $message->participant_id)
            ->get()
            ->each(function ($participant) use ($senderName, $message) {
                $userClass = $participant->participantable_type;
                $user      = $userClass::find($participant->participantable_id);

                if (! $user) return;

                Notification::make()
                    ->title('New message from ' . $senderName)
                    ->body($message->body ?? 'Sent an attachment')
                    ->icon('heroicon-o-chat-bubble-left-ellipsis')
                    ->actions([
                        Action::make('open')
                            ->label('Open Chat')
                            ->url('/auth/chats')
                            ->markAsRead(),
                    ])
                    ->sendToDatabase($user, isEventDispatched: true);
            });
    }
}
