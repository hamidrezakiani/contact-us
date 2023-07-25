<?php

namespace Hamiddj\ContactUs;
use Illuminate\Support\ServiceProvider;

class ContactUsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views','contactUs');
        $this->loadRoutesFrom(__DIR__.'/route.php');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/contactUs'),
        ]);
        $this->publishes([
            __DIR__.'/config.php' => config_path('smartticket.php'),
        ]);
    }

    public function register()
    {

    }
}