<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Providers\CustomUserProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // Your policies here if needed
    ];

    public function boot()
    {
        $this->registerPolicies();

        // ✅ This must match 'driver' => 'custom' in config/auth.php
        Auth::provider('custom', function ($app, array $config) {
            return new CustomUserProvider(
                $app['hash'],
                $config['model']
            );
        });
    }
}
