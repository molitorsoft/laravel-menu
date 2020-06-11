<?php

namespace Molitor\Menu\Providers;

use Illuminate\Support\ServiceProvider;
use Molitor\Menu\Libs\MenuManager;

class MenuServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'menu');
    }

    public function register()
    {
        $this->app->singleton('MenuManager', function ($app) {
            return new MenuManager();
        });
    }
}