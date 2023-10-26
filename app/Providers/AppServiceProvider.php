<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\OtomosyonComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('front.partials._header',function($view) {
            $categories = Category::withCount('posts')->get();
            $view->with('categories', $categories);
        });
        view()->composer('front.partials._footer', function ($view) {
            $view->with('keyfooter', "bura footerdir");
        });
    }
}
