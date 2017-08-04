<?php
namespace Rocket\Engine\Contracts;

use Rocket\Engine\Contracts\Model;
use Illuminate\Support\Collection;

interface Repository
{
    /**
     * [add description]
     */
    public function add(Model $model);

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
