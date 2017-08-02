<?php

namespace Rocket\Stories;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Rocket\Stories\Contracts\Story as StoryContract;

class Story extends Eloquent implements StoryContract
{
    protected $fillable = ['title', 'slug', 'story', 'category_id', 'user_id'];

    public function category()
    {
        return $this->belongsTo('Rocket\Stories\Category');
    }

    public function user()
    {
        return $this->belongsTo('Rocket\Fuel\User\User');
    }
}