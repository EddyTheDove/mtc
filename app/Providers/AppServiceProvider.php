<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\Settings;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
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

        $set = Settings::find(1);
        $pages = Page::where('status', 'published')->get();

        View::share('pages', $pages);
        View::share('settings', $set);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
