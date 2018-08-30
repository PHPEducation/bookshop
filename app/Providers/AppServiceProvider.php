<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Http\ViewComposers\CategoriesComposer;
use App\Http\ViewComposers\LimitCategoriesComposer;
use App\Http\ViewComposers\PricesRangeComposer;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layout/main_layout', CategoriesComposer::class);
        view()->composer('layout/sidebar', LimitCategoriesComposer::class); 
        view()->composer('layout/sidebar', PricesRangeComposer::class);
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
