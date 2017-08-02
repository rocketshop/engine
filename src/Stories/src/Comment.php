<?php

namespace Rocket\Stories;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Rocket\Stories\Contracts\Comment as CommentContract;

class Comment extends Eloquent implements CommentContract
{
    protected $table = 'story_comments';

    protected $fillable = ['title', 'slug', 'story', 'category_id', 'user_id'];
}