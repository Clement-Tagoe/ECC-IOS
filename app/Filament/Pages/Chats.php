<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Pages\Page;

class Chats extends Page
{
    protected string $view = 'filament.pages.chats';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-chat-bubble-oval-left';

    public function getTitle(): string
    {
        return '';
    }
}
