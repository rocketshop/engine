<?php
namespace Rocket\Fuel\User\Contracts;

use Rocket\Fuel\Contracts\Model;

interface User extends Model
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