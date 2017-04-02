<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Areas as Areas;


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

        view()->composer('livros/create', function($view){
            $view->with('areas', Areas::all());
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
