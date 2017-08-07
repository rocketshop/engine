<?php

namespace Rocket\Store\Contracts;

use Rocket\Engine\Contracts\Model;

interface ArticlePrice extends Model
{
    /**
     * [getId description]
     * @return [type] [description]
     */
    public function getRegion() : string;
    public function setRegion(string $region);

    /**
     * [getName description]
     * @return [type] [description]
     */
    public function getCurrency() : string;
    public function setCurrency(string $currency);

    /**
     * [getId description]
     * @return [type] [description]
     */
    public function getPrice() : float;
    public function setPrice(float $price);
}