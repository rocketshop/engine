<?php

namespace Rocket\Engine;

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
        $this->mergeConfigFrom(
            __DIR__.'/config.php', 'rocketengine'
        );

        $config = config('rocketengine');

        foreach ($config['providers'] as $provider) {
            $this->app->register($provider);
        }
    }
}