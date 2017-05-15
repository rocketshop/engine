<?php
namespace Rocket\Fuel\User;

use Rocket\Fuel\Contracts\Model;
use Rocket\Fuel\User\Contracts\UserRepository;
use Illuminate\Support\Collection;

class ArrayUserRepository implements UserRepository
{
    private $repository = [];

    /**
     * [add description]
     */
    public function add(Model $model) 
    {
        $this->repository[$model->id] = $model;
    }

    /**
     * [getAll description]
     * @return [type] [description]
     */
    public function getAll() : Collection
    {
        return collect($this->repository);
    }

    /**
     * [findById description]
     * @return [type] [description]
     */
    public function findById($articleId) : Model
    {
        return $this->repository[$articleId];
    }
}