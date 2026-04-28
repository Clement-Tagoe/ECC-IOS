<?php

namespace App\Listeners;



use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Wirechat\Wirechat\Events\NotifyParticipant;

class SendFilamentChatNotification implements ShouldQueue
{
    use InteractsWithQueue;

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
    public function handle(NotifyParticipant $event): void
    {
    
        // $message   = $event->message;
        // $recipient = $event->participant; // Participant model, not User

        // // Resolve the actual User from the participant
        // $userClass = $recipient->participantable_type;
        // $user      = $userClass::find($recipient->participantable_id);

        // if (! $user) {
        //     return;
        // }

        // // Resolve sender
        // $senderParticipant = $message->participant;
        // $senderClass       = $senderParticipant?->participantable_type;
        // $sender            = $senderClass ? $senderClass::find($senderParticipant->participantable_id) : null;
        // $senderName        = $sender?->name ?? 'Someone';

        // Notification::make()
        //     ->title('New message from ' . $senderName)
        //     ->body($message->body ?? 'Sent an attachment')
        //     ->icon('heroicon-o-chat-bubble-left-ellipsis')
        //     ->actions([
        //         Action::make('open')
        //             ->label('Open Chat')
        //             ->url('/chats')
        //             ->markAsRead(),
        //     ])
        //     ->broadcast($user);
    }

    //     $message      = $event->message;
    //     $conversation = $message->conversation;

    //     if ($conversation->isSelf()) {
    //         return;
    //     }

        
    //     // The sender is reached via participant → participantable
    //     $senderParticipant = $message->participant;         // Participant model
    //     $sender            = $senderParticipant?->participantable; // Your User model
    //     $senderName        = $sender?->name ?? 'Someone';

    //     // All OTHER participants in the conversation
    //     $recipients = $conversation->participants()
    //         ->where('id', '!=', $message->participant_id)   // exclude sender's Participant row
    //         ->with('participantable')
    //         ->get();

    //    foreach ($recipients as $participant) {
    //         // Load user directly from the morph fields instead of relying on the relationship
    //         $userClass = $participant->participantable_type; // "App\Models\User"
    //         $user = $userClass::find($participant->participantable_id);

    //         if (! $user) {
    //             continue;
    //         }

    //         Notification::make()
    //             ->title('New message from ' . $senderName)
    //             ->body($message->body ?? 'Sent an attachment')
    //             ->icon('heroicon-o-chat-bubble-left-ellipsis')
    //             ->actions([
    //                 Action::make('open')
    //                     ->label('Open Chat')
    //                     ->url('/chats')
    //                     ->markAsRead(),
    //             ])
    //             ->sendToDatabase($user);
    //     }

}
