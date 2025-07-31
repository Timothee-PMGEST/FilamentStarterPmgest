<?php

namespace Pmgest;

use Illuminate\Support\ServiceProvider;

class FilamentStarterServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {



        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->publishes([
            __DIR__.'/../src/Filament/Resources' => app_path('Filament/Resources'),
        ], 'filamentstarter-resources');

        $this->commands([
            \TimotheMillot\FilamentPmgest\Console\InstallFilamentCommand::class,
        ]);


    }
}


