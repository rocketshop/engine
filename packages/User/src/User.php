<?php

namespace Rocket\User;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Rocket\User\Contracts\User as UserContract;

class User extends Eloquent implements UserContract
{
    protected $fillable = ['email','name'];
}