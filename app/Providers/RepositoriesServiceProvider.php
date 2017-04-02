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
        $this->app->bind('App\Repositories\Interfaces\AreasInterface', 'App\Repositories\AreasRepository');
        $this->app->bind('App\Repositories\Interfaces\CategoriasInterface', 'App\Repositories\CategoriasRepository');
        $this->app->bind('App\Repositories\Interfaces\OpinioesInterface', 'App\Repositories\OpinioesRepository');
        $this->app->bind('App\Repositories\Interfaces\LivrosInterface', 'App\Repositories\LivrosRepository');
        $this->app->bind('App\Repositories\Interfaces\AutoresInterface', 'App\Repositories\AutoresRepository');
    }
}
