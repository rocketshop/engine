<?php
namespace Rocket\Fuel\Article;

use Rocket\Fuel\Contracts\Model;
use Rocket\Fuel\Article\Contracts\ArticleRepository;
use Illuminate\Support\Collection;

class ArrayArticleRepository implements ArticleRepository
{
    private $repository = [
        1 => [
            'id'            => 1,
            'product_id'    => 30
        ],

        2 => [
            'id'            => 2,
            'product_id'    => 30
        ],
    ];

    /**
     * [add description]
     */
    public function add(Model $model) : \void 
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
    public function findById($articleId) : Model
    {
        return $this->repository[$articleId];
    }
}