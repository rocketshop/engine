<?php

namespace Rocket\User;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Rocket\User\Contracts\User as UserContract;
use Illuminate\Notifications\Notifiable;

class User extends Eloquent implements UserContract
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}