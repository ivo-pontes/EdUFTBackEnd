<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Estados as Estados;


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
