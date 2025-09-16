<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        // Pass a single variable
        View::share('appName', 'My Laravel App');

        // Pass an array of variables
        View::share('features', ['fast', 'secure', 'modern']);

        $user = (object)[
            'name' => 'Alice',
            'email' => 'alice@example.com'
        ];
        View::share('user', $user);

        // Pass an Associative array
        View::share('socialLinks', [
            'GitHub' => 'https://github.com/example',
            'Twitter' => 'https://twitter.com/example',
            'LinkedIn' => 'https://linkedin.com/in/example'
        ]);
        
        
    }
}
