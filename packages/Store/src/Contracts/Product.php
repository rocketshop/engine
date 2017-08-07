<?php
namespace Rocket\Store\Contracts;

use Rocket\Engine\Contracts\Model;

interface Product extends Model
{
    /**
     * [getId description]
     * @return [type] [description]
     */
    public function getId() : int;
    public function setId(int $id);

    /**
     * [getName description]
     * @return [type] [description]
     */
    public function getName() : string;
    public function setName(string $name);
}