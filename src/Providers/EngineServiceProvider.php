<?php

namespace Rocket\Engine\Providers;

use Illuminate\Support\ServiceProvider;

class EngineServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (! defined('ENGINE_PATH')) {
            define('ENGINE_PATH', realpath(__DIR__.'/../../'));
        }

        $this->mergeConfigFrom(
            ENGINE_PATH.'/config/packages.php', 'engine.packages'
        );

        $config = config('engine.packages');

        foreach ($config['providers'] as $provider) {
            $this->app->register($provider);
        }
    }

    public function boot() {
        \Carbon\Carbon::setLocale(config('app.locale'));
    }
}