<?php

namespace Rocket\Fuel\Money;

use Illuminate\Support\ServiceProvider;

class MoneyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        Blade::directive('money', function ($money, $currency = "USD") {
            return "<?php echo money($money, $currency); ?>";
        });

        Blade::directive('price', function ($money, $currency = "USD") {
            return "<?php echo money($money, $currency); ?>";
        });
    }
}

