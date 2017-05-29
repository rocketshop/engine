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

        dd($config);

        $this->app->register('');
    }
}