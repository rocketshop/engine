<?php

namespace Rocket\Store;

use Rocket\Engine\Contracts\Model;

class EloquentArticleRepository implements ArticleRepository
{

    // should we cache in this file aswell maybe

    /**
     * [add description]
     */
    public function add(Model $model) 
    {
        $article = new Article();
        $article->fill($model);
        $article->save();
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
    public function findById(int $articleId) : Model
    {
        return Article::where('article_id', $articleId)->first();
    }
}