<?php

namespace Rocket\Cockpit\Providers;

use Illuminate\Support\ServiceProvider;
use Route;

class CockpitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->booted(function () {
            $this->defineRoutes();
        });

        $this->defineResources();

        $this->registerMiddleware();
    }

    /**
     * Define the Rocket routes.
     *
     * @return void
     */
    protected function defineRoutes()
    {
        if (!$this->app->routesAreCached()) {
            $router = app('router');

            $router->group(['namespace' => 'Rocket\Cockpit\Http\Controllers'], function ($router) {
                require COCKPIT_PATH.'/routes/web.php';
            });
        }
    }

    /**
     * Define the Rocket routes.
     *
     * @return void
     */
    protected function registerMiddleware()
    {
        Route::aliasMiddleware('admin', \Rocket\Cockpit\Http\Middleware\Admin::class);
    }

    /**
     * Define the resources used by Rocket.
     *
     * @return void
     */
    protected function defineResources()
    {
        $this->loadViewsFrom(COCKPIT_PATH.'/resources/views', 'cockpit');
        $this->loadTranslationsFrom(COCKPIT_PATH.'/resources/lang', 'cockpit'); 
        $this->mergeConfigFrom(COCKPIT_PATH.'/config/rocket/cockpit.php', 'cockpit');
    }

    /**
     * Define the resources used by Rocket.
     *
     * @return void
     */
    public function register()
    {
        if (! defined('COCKPIT_PATH')) {
            define('COCKPIT_PATH', realpath(__DIR__.'/../../'));
        }
    }
}