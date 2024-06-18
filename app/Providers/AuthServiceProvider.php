<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->register();

    Gate::define('access-home', function ($user) {
        return $user !== null; // Jika pengguna terautentikasi, mereka memiliki akses ke home
    });
    }
}