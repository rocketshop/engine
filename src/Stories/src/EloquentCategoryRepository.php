<?php

namespace Rocket\Stories;

use Rocket\Stories\Contracts\Model;
use Rocket\Stories\Contracts\CategoryRepository;
use Illuminate\Support\Collection;

class EloquentCategoryRepository implements CategoryRepository
{

    // should we cache in this file aswell maybe

    /**
     * [add description]
     */
    public function add(Model $model) 
    {
        $category = new Category();
        $category->fill($model);
        $category->save();
    }

    /**
     * [getAll description]
     * @return [type] [description]
     */
    public function getAll() : Collection
    {
        return Category::all();
    }

    /**
     * [findById description]
     * @return [type] [description]
     */
    public function findById($categoryId) : Model
    {
        return Category::where('id', $categoryId)->first();
    }
}