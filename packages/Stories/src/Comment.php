<?php

namespace Rocket\Stories;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Rocket\Stories\Contracts\Comment as CommentContract;

class Comment extends Eloquent implements CommentContract
{
    protected $table = 'story_comments';

    protected $fillable = ['name', 'story_id', 'user_id', 'parent_id'];

    public function user()
    {
        return $this->belongsTo('Rocket\User\User');
    }

    public function story()
    {
        return $this->belongsTo('Rocket\Stories\Story');
    }

    public function comment()
    {
        return $this->belongsTo('Rocket\Stories\Comment');
    }

    public function votes()
    {
        return $this->hasMany('Rocket\Stories\CommentVotes');
    }
}