<?php

namespace Tareqmahmud\Sweet;

use Illuminate\Support\ServiceProvider;

class SweetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap sweet service provider
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'sweet');

        $this->publishes([
            __DIR__ . '/views/sweet_message.blade.php' => base_path('resources/views/vendor/sweet/sweet_message.blade.php')
        ], 'sweet_views');

        $this->publishes([
            __DIR__ . '/assets/sweetalert.css' => base_path('public/css/libs/sweetalert.css'),
            __DIR__ . '/assets/sweetalert.js'  => base_path('public/js/libs/sweetalert.js')

        ], 'sweet_assets');
    }

    /**
     * Register sweet service provider
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('sweet', function ($app) {
            return $this->app->make('Tareqmahmud\Sweet\Sweet');
        });
    }
}
