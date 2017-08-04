<?php

namespace Rocket\Stories;

use Rocket\Stories\Contracts\Story as Model;
use Rocket\Stories\Contracts\StoryRepository;
use Illuminate\Support\Collection;

class EloquentStoryRepository implements StoryRepository
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
        return Story::all();
    }

    /**
     * [findById description]
     * @return [type] [description]
     */
    public function findById($storyId) : Model
    {
        return Story::where('id', $storyId)->first();
    }
}