<?php

namespace Rocket\Fuel\Article;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Rocket\Fuel\Article\Contracts\Article as ArticleContract;
use Rocket\Fuel\Article\Contracts\ArticlePrice as ArticlePriceContract;
use Rocket\Fuel\Article\Contracts\ArticleStock as ArticleStockContract;

class Article extends Eloquent implements ArticleContract
{
    protected $fillable = ['id', 'product_id', 'sku', 'name', 'description', 'stock'];

    /**
     * 
     * [getId description]
     * @return [type] [description]
     */
    public function getId() : int 
    {

    }

    /**
     * [setId description]
     * @param int $id [description]
     */
    public function setId(int $id) 
    {

    }

    /**
     * [getId description]
     * @return [type] [description]
     */
    public function getArticleId() : int
    {

    }

    /**
     * [setArticleId description]
     * @param int $id [description]
     */
    public function setArticleId(int $id)
    {

    }

    /**
     * [getName description]
     * @return [type] [description]
     */
    public function getName() : string
    {

    }

    /**
     * [setName description]
     * @param string $name [description]
     */
    public function setName(string $name)
    {

    }

    /**
     * [getName description]
     * @return [type] [description]
     */
    public function getSku() : string
    {

    }

    /**
     * [setSku description]
     * @param string $name [description]
     */
    public function setSku(string $name)
    {

    }

    /**
     * [getId description]
     * @return [type] [description]
     */
    public function getDescription() : string
    {

    }

    /**
     * [setDescription description]
     * @param string $description [description]
     */
    public function setDescription(string $description)
    {

    }

    /**
     * [getId description]
     * @return [type] [description]
     */
    public function getPrice($region, $currency) : ArticlePriceContract
    {

    }

    /**
     * [getId description]
     * @return [type] [description]
     */
    public function getStock($region) : ArticleStockContract
    {

    }
}