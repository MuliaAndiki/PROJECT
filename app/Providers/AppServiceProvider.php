<?php

namespace App\Providers;

use App\View\Components\NewsUpdate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade; // Tambahkan ini


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
        Blade::component('newsupdate', \App\View\Components\NewsUpdate::class);
    }
}
