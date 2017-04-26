<?php

use Rocket\Fuel\Money\Money;

if (! function_exists('money')) {
    /**
     * money.
     *
     * @param mixed  $amount
     * @param string $currency
     *
     * @return \Rocket\Fuel\Money\Money
     */
    function money($amount, $currency = 'USD')
    {
        return new Money($amount, $currency);
    }
}