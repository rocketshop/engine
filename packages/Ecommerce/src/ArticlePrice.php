<?php

namespace Rocket\Fuel\Article;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Rocket\Fuel\Article\Contracts\ArticlePrice as ArticlePriceContract;

abstract ArticlePrice extends Eloquent implements ArticlePriceContract
{
    //
}