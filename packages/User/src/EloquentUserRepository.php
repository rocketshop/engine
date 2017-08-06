<?php

namespace Rocket\User;

use Rocket\Engine\Contracts\Model;
use Rocket\User\Contracts\UserRepository;
use Illuminate\Support\Collection;

class EloquentUserRepository implements UserRepository
{

    // should we cache in this file aswell maybe

    /**
     * [add description]
     */
    public function add(Model $model) 
    {
        $article = new User();
        $article->fill($model);
        $article->save();
    }

    /**
     * [getAll description]
     * @return [type] [description]
     */
    public function getAll() : Collection
    {
        return User::all();
    }

    /**
     * [findById description]
     * @return [type] [description]
     */
    public function findById($userId) : Model
    {
        return User::where('id', $userId)->first();
    }
}