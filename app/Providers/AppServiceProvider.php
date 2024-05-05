<?php

namespace App\Providers;

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
        // \Carbon\Carbon::setLocale("zh");
        // \App\Models\Topic::observe(\App\Observers\TopicObserver::class);
		\App\Models\User::observe(\App\Observers\UserObserver::class);
		\App\Models\Topic::observe(\App\Observers\TopicObserver::class);
        \Illuminate\Pagination\Paginator::useBootstrap();
    }
}
