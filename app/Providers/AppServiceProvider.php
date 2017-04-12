<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Areas as Areas;
use App\Models\Estados as Estados;
use App\Models\Categorias as Categorias;
use App\Models\Autores as Autores;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('registration/create', function($view){
            $view->with('estados', Estados::all());
        });

        //dd(Autores::all());
        view()->composer('livros/create', function($view){
            $view->with('areas', Areas::all());
            $view->with('categorias', Categorias::all());
            $view->with('autores', Autores::all());
        });

        view()->composer('livros/edit', function($view){
            $view->with('areas', Areas::all());
            $view->with('categorias', Categorias::all());
            $view->with('autores', Autores::all());
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
