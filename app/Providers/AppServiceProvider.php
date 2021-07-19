<?php

namespace App\Providers;

use App\Models\NewsCategory;
use Illuminate\Support\ServiceProvider;

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
     * @return void
     */
    public function boot()
    {
        view()->composer('front2.partials.app',function ($view){
            $view->with('frd', ["menu" => NewsCategory::all()]);
        });
    }
}
