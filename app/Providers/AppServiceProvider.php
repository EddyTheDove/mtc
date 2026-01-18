<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\Settings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        Schema::defaultStringLength(191);

        Model::preventLazyLoading(! $this->app->isProduction());

        // Only try to load settings and pages if not running in console
        if (! $this->app->runningInConsole()) {
            try {
                $set = Settings::find(1);
                $pages = Page::where('status', 'published')->get();

                View::share('pages', $pages);
                View::share('settings', $set);
            } catch (\Exception $e) {
                // Handle cases where database hasn't been set up yet
            }
        }
    }
}
