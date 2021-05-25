<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Rubric;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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

        DB::listen(function($query){
            Log::channel('sqllogs')->info($query->sql);
        });
    }
}
