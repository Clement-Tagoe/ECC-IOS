<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Listeners\SendWirechatDatabaseNotification;
use Illuminate\Support\Facades\Event;
use Wirechat\Wirechat\Events\MessageCreated;

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
        Event::listen(
            MessageCreated::class,
            SendWirechatDatabaseNotification::class,
        );
    }
}
