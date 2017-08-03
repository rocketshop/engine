<?php

namespace Rocket\Stories;

use Rocket\Stories\Contracts\Comment as Model;
use Rocket\Stories\Contracts\CommentRepository;
use Illuminate\Support\Collection;

class EloquentCommentRepository implements CommentRepository
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
        return Comment::all();
    }

    /**
     * [findById description]
     * @return [type] [description]
     */
    public function findById($commentId) : Model
    {
        return Comment::where('id', $commentId)->first();
    }
}