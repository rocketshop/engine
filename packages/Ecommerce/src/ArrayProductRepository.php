<?php
namespace Rocket\Fuel\Product;

use Rocket\Fuel\Contracts\Model;
use Rocket\Fuel\Product\Contracts\ProductRepository;
use Illuminate\Support\Collection;

class ArrayProductRepository implements ProductRepository
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
    public function findById($id) : Model
    {
        return $this->repository[$id];
    }
}