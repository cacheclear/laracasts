<?php

namespace App\Providers;

use App\Billing\Stripe;
use App\Post;
use App\Tag;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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

        view()->composer('layouts.sidebar', function($view){
            $view->with('archives', Post::archives());
            $view->with('tags', Tag::has('posts')->pluck('name'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Stripe::class, function(){

            return new Stripe(config('services.stripe.secret'));
        });
    }
}
