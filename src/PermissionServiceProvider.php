<?php

namespace Yehudafh;

use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');

        $this->loadViewsFrom(__DIR__.'/views', 'permission');

        // $this->publishes([
        //     __DIR__.'/../config/cardcom.php' => config_path('cardcom.php'),
        // ], 'cardcom-config');

        // $this->mergeConfigFrom(__DIR__.'/../config/cardcom.php', 'cardcom');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Permission::class, function ($app) {
            return new Permission();
        });
    }
}
