<?php

namespace Rocket\Fuel\Article\Contracts;

use Rocket\Fuel\Contracts\Model;

interface ArticleStock extends Model
{
    /**
     * [getId description]
     * @return [type] [description]
     */
    public function getRegion() : string;
    public function setRegion(string $region);

    /**
     * [getId description]
     * @return [type] [description]
     */
    public function getStock() : int;
    public function setStock(int $price);
}