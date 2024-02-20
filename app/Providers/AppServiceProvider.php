<?php

namespace App\Providers;

use App\Models\Reservasi;
use App\Observers\UpdateStatusObserver;
use Illuminate\Support\ServiceProvider;

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
        
        Reservasi::observe(UpdateStatusObserver::class);
    }
}
