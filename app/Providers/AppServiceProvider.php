<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

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
        //view()->composer(harabondereceyimizi meselen header, function($view)){
        // $view('categories',Catogory::withCount('posts')->all()) => buni cagirmaga ehtiyac yoxdur. cunku AppAerverProvider ilk isleyenlerdendir. ozu ise dusur. 
        // }

        // view()->composer('front.partials._header',function($view){
        //     $view->with('categories',Category::withCount('posts')->all())
        // });


        view()->composer('front.partials._header',function($view) {
            $categories = Category::withCount('posts')->get();
            $view->with('categories', $categories);
        });
    }
}
