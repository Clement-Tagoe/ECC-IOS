<?php

namespace App\Providers;

use App\Observers\MessageObserver;
use Illuminate\Support\ServiceProvider;
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
    }
}
