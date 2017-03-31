<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Interfaces\UserInterface', 'App\Repositories\UserRepository');
        $this->app->bind('App\Repositories\Interfaces\EstadosInterface', 'App\Repositories\EstadosRepository');
    }
}
