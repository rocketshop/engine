<?php

namespace Rocket\Stories;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Rocket\Stories\Contracts\Category as CategoryContract;

class Category extends Eloquent implements CategoryContract
{
    protected $table = 'story_categories';

    protected $fillable = ['name', 'slug'];


    public function stories()
    {
        return $this->hasMany('Rocket\Stories\Story');
    }
}