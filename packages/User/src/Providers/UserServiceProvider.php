<?php

namespace Rocket\User\Providers;

use Rocket\Engine\Providers\ServiceProvider;
use Route;

class UserServiceProvider extends ServiceProvider
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
        $this->definePublishes();

        $this->registerMiddleware();
    }
    /**
     * [publishResources description]
     * 
     * @return void
     */
    protected function definePublishes() 
    {
        $this->publishes([
            USER_PATH.'/database/migrations/' => database_path('migrations')
        ], 'migrations');

        $this->publishes([
            USER_PATH.'/../resources/views/web' => base_path('resources/views/vendor/user'),
        ], 'views');
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

            $router->group(['namespace' => 'Rocket\User\Http\Controllers'], function ($router) {
                require USER_PATH.'/routes/web.php';
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
        $this->loadViewsFrom(USER_PATH.'/resources/views/admin', 'user.admin');
        $this->loadViewsFrom(USER_PATH.'/resources/views/web', 'user');
        $this->loadTranslationsFrom(USER_PATH.'/resources/lang', 'user');
        $this->recursiveMergeConfigFrom(USER_PATH.'/config/rocket/user/cockpit/menu.php', 'cockpit.menu');
    }

    /**
     * Define the resources used by Rocket.
     *
     * @return void
     */
    public function register()
    {
        if (! defined('USER_PATH')) {
            define('USER_PATH', realpath(__DIR__.'/../../'));
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