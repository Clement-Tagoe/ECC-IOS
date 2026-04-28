<?php

namespace App\Providers\Wirechat;

use Wirechat\Wirechat\Panel;
use Wirechat\Wirechat\PanelProvider;
use Wirechat\Wirechat\Support\Enums\EmojiPickerPosition;
use Wirechat\Wirechat\Support\Enums\UnreadIndicatorType;


class ChatsPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
             ->id('chats')
             ->path('chats')
             ->middleware(['web','auth'])
             ->default()
             ->chatsSearch()
             ->createChatAction()
             ->createGroupAction()
             ->clearChatAction()
             ->deleteChatAction()
             ->deleteMessageActions()
             ->unreadIndicator(type: UnreadIndicatorType::Count)
             ->emojiPicker(position: EmojiPickerPosition::Docked)
             ->attachments()
             ->default()
             ->broadcasting()
             ->webPushNotifications()
             ->messagesQueue('messages')
             ->eventsQueue('default')
             ->fileMimes(['zip', 'rar', 'txt', 'pdf', 'docx', 'doc', 'xlsx', 'xls', 'pptx', 'ppt']);
    }
}
