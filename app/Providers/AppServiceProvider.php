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
        ]);
        if(Category::where('key_name','contact')->first()->status==1){
        view()->share([
            'mainContact'=>Category::where('status', 1)->where('key_name','contact')->first()->get_content->first(),
        ]);
        }
        if(Category::where('key_name','service')->first()->status==1){
            view()->share([
                'footerService'=>Category::where('status', 1)->where('key_name','service')->first()->get_content->take(10),
            ]);
        }
        if(Category::where('key_name','about')->first()->status==1){
            view()->share([
                'support'=>Category::where('status', 1)->where('key_name','about')->first()->get_content->take(10),
            ]);
        }
    }
}
