<?php

namespace Rocket\Store;

use Rocket\Engine\Contracts\Model;
use Rocket\Store\Contracts\ArticleRepository;
use Illuminate\Support\Collection;

class EloquentArticleRepository implements ArticleRepository
{

    // should we cache in this file aswell maybe

    /**
     * [add description]
     */
    public function add(Model $model) 
    {
        $model->save();
    }

    /**
     * [getAll description]
     * @return [type] [description]
     */
    public function getAll() : Collection
    {
        return Article::all();
    }

    /**
     * [findById description]
     * @return [type] [description]
     */
    public function findById($articleId) : Model
    {
        return Article::where('article_id', $articleId)->first();
    }
}