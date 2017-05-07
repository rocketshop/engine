<?php

namespace Rocket\Fuel\Contracts;

use Rocket\Fuel\Contracts\Model;
use Illuminate\Support\Collection;

interface Repository
{

    /**
     * [add description]
     */
    public function add(Model $model) : void;

    /**
     * [getAll description]
     * @return [type] [description]
     */
    public function getAll() : Collection;

    /**
     * [findById description]
     * @return [type] [description]
     */
    public function findById($id) : Model;
}
