<?php

namespace Rocket\Fuel\User;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Rocket\Fuel\User\Contracts\User as UserContract;

class User extends Eloquent implements UserContract
{
    protected $fillable = ['id','name'];

    /**
     * [getId description]
     * @return [type] [description]
     */
    public function getId() : int 
    {

    }

    /**
     * [setId description]
     * @param int $id [description]
     */
    public function setId(int $id) 
    {

    }


    /**
     * [getName description]
     * @return [type] [description]
     */
    public function getName() : string
    {

    }

    /**
     * [setName description]
     * @param string $name [description]
     */
    public function setName(string $name)
    {

    }
}