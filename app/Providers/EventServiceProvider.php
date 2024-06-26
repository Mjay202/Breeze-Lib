<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }
    
    public $listens = [
    Registered::class => SendEmailVerificationNotification::class,
    ];

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
