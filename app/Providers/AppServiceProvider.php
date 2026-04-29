<?php

namespace App\Providers;

use App\Listeners\SendCommentNotification;
use App\Listeners\SendMentionNotification;
use App\Observers\MessageObserver;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Kirschbaum\Commentions\Events\UserIsSubscribedToCommentableEvent;
use Kirschbaum\Commentions\Events\UserWasMentionedEvent;
use Wirechat\Wirechat\Models\Message;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Message::observe(MessageObserver::class);
        Event::listen(UserIsSubscribedToCommentableEvent::class, SendCommentNotification::class);
        Event::listen(UserWasMentionedEvent::class, SendMentionNotification::class);
    }
}
