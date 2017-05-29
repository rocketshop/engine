<?php

namespace Rocket\Cockpit\Providers;

use Illuminate\Support\ServiceProvider;

class CockpitServiceProvider extends ServiceProvider
{
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
                require COCKPIT_PATH.'/routes/api.php';
                require COCKPIT_PATH.'/routes/web.php';
            });
        }
    }

    /**
     * Define the resources used by Rocket.
     *
     * @return void
     */
    protected function defineResources()
    {
        $this->loadViewsFrom(COCKPIT_PATH.'/resources/views', 'cockpit');
    }
    /**
     * Define the resources used by Rocket.
     *
     * @return void
     */
    protected function register()
    {
        if (! defined('COCKPIT_PATH')) {
            define('COCKPIT_PATH', realpath(__DIR__.'/../../'));
        }
    }
}