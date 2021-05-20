<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Rubric;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return voidf
     */
    public function boot()
    {
        view()->composer('layouts.footer', function($view){
            $view->with('rubrics', Rubric::all());
        });

        Paginator::useBootstrap();
    }
}
