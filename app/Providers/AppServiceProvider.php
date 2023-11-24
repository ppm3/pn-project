<?php

namespace App\Providers;

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
        //
        view()->composer('admin.layouts.app', function ($view) {
            $view->with('titleAdmin', 'Admin :: Pasaje Navara Board');
            $view->with('descriptionAdmin', 'Administrador que permite colocar información para los vecinos de Pasaje Navarra');
        });
    }
}
