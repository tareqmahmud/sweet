<?php

namespace Tareqmahmud\Sweet;

use Illuminate\Support\ServiceProvider;

class SweetServiceProvider extends ServiceProvider
{
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
