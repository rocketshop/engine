<?php

namespace Rocket\Stories;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Votes extends Eloquent
{
    protected $table = 'story_votes';

    protected $fillable = ['story_id', 'user_id', 'value'];

    public function user()
    {
        return $this->belongsTo('Rocket\User\User');
    }

    public function story()
    {
        return $this->belongsTo('Rocket\Stories\Story');
    }
}