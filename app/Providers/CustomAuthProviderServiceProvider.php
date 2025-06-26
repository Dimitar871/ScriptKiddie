<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Providers\CustomUserProvider;

class CustomAuthProviderServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Auth::provider('custom', function ($app, array $config) {
            return new CustomUserProvider(
                $app['hash'],
                $config['model']
            );
        });
    }
}
