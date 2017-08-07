<?php

namespace Rocket\Store\Providers;

use Rocket\Engine\Providers\ServiceProvider;
use Route;

class StoreServiceProvider extends ServiceProvider
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

            $router->group(['namespace' => 'Rocket\Store\Http\Controllers'], function ($router) {
                require STORE_PATH.'/routes/web.php';
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
        $this->loadViewsFrom(STORE_PATH.'/resources/views', 'ecommerce');
        $this->loadTranslationsFrom(STORE_PATH.'/resources/lang', 'ecommerce');
        $this->recursiveMergeConfigFrom(STORE_PATH.'/config/rocket/ecommerce/cockpit/menu.php', 'cockpit.menu');
    }

    /**
     * Define the resources used by Rocket.
     *
     * @return void
     */
    public function register()
    {
        if (! defined('STORE_PATH')) {
            define('STORE_PATH', realpath(__DIR__.'/../../'));
        }

        $file = STORE_PATH . '/../' . 'helpers.php';

        if (file_exists($file)) {
            require_once($file);
        }

        Blade::directive('money', function ($money, $currency = "USD") {
            return "<?php echo money($money, $currency); ?>";
        });
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