<?php

namespace Rocket\Fuel\Article;

use Illuminate\Database\Eloquent\Model;
use Rocket\Fuel\Article\Database\Article;
use Rocket\Fuel\Article\ArticleRepository;

class ArrayArticleRepository implements ArticleRepository
{
    private $repository = [
        1 => [
            'id'            => 1
            'product_id'    => 30
        ],

        2 => [
            'id'            => 2
            'product_id'    => 30
        ],
    ];

    /**
     * [add description]
     */
    public function add(Model $model) : void 
    {
        $this->repository[$model->id] = $model;
    }

    /**
     * [getAll description]
     * @return [type] [description]
     */
    public function getAll() : Collection
    {
        return collect($this->repository);
    }

    /**
     * [findById description]
     * @return [type] [description]
     */
    public function findById(int $articleId) : Model
    {
        return $this->repository[$articleId];
    }
}