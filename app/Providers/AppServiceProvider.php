<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
         Blade::component('layout', 'layouts.app');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
{
    Password::defaults(function () {
        return Password::min(10)
            ->numbers()
            ->uncompromised();
    });

  
    if (env('APP_ENV') === 'production') {
        URL::forceScheme('https');
    }
}
}
