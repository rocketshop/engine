<?php

namespace Rocket\Ecommerce\Providers;

use Rocket\Engine\ServiceProvider;
use Route;

class EcommerceServiceProvider extends ServiceProvider
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

            $router->group(['namespace' => 'Rocket\Ecommerce\Http\Controllers'], function ($router) {
                require ECOMMERCE_PATH.'/routes/api.php';
                require ECOMMERCE_PATH.'/routes/web.php';
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
    }

    /**
     * Define the resources used by Rocket.
     *
     * @return void
     */
    protected function defineResources()
    {
        $this->loadViewsFrom(ECOMMERCE_PATH.'/resources/views', 'ecommerce');
        $this->loadTranslationsFrom(ECOMMERCE_PATH.'/resources/lang', 'ecommerce');
        $this->recursiveMergeConfigFrom(ECOMMERCE_PATH.'/config/rocket/ecommerce/cockpit/menu.php', 'cockpit.menu');
    }

    /**
     * Define the resources used by Rocket.
     *
     * @return void
     */
    public function register()
    {
        if (! defined('ECOMMERCE_PATH')) {
            define('ECOMMERCE_PATH', realpath(__DIR__.'/../../'));
        }
    }


    /**
     * Merge the given configuration with the existing configuration.
     *
     * @param  string  $path
     * @param  string  $key
     * @return void
     */
    protected function recursiveMergeConfigFrom($path, $key)
    {
        $config = $this->app['config']->get($key, []);

        $this->app['config']->set($key, $this->arrayMergeRecursive($config, require $path, true));
    }
}