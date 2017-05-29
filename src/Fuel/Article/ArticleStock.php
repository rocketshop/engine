<?php

namespace Rocket\Fuel\Article;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Rocket\Fuel\Article\Contracts\ArticleStock as ArticleStockContract;

abstract ArticleStock extends Eloquent implements ArticleStockContract
{
    //
}