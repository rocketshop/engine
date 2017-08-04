<?php

namespace Rocket\Fuel\Money;

use Illuminate\Contracts\Support\Renderable;

class Money extends Renderable
{

    protected $value;

    protected $currency;

    public function __construct($value, $currency = "USD") 
    {
        $this->value = $value;
        $this->currency = $currency;
    }
    
    public function format() 
    {
        return money_format('%i', $this->value)
    }

    public function render() 
    {
        return $this->format();
    }

    public function __toString() 
    {
        return $this->render();
    }

}
