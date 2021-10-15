<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Content;

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
        Paginator::useBootstrap();
        view()->share([
            'category'=> Category::where('status', 1)->where('menu_top',1)->orderby('index','asc')->get(),
            'mainContact'=>Category::where('status', 1)->where('key_name','contact')->first()->get_content->first(),
        ]);
    }
}
