<?php

namespace Rocket\Stories;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Votes extends Eloquent
{
    protected $table = 'comment_votes';

    protected $fillable = ['comment_id', 'user_id', 'value'];

    public function user()
    {
        return $this->belongsTo('Rocket\User\User');
    }

    public function comment()
    {
        return $this->belongsTo('Rocket\Stories\Comment');
    }
}