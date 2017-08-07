<?php
namespace Rocket\Store\Contracts;

use Rocket\Engine\Contracts\Model;

interface Article extends Model
{
    /**
     * [getId description]
     * @return [type] [description]
     */
    public function getId() : int;
    public function setId(int $id);

    /**
     * [getId description]
     * @return [type] [description]
     */
    public function getArticleId() : int;
    public function setArticleId(int $id);

    /**
     * [getName description]
     * @return [type] [description]
     */
    public function getName() : string;
    public function setName(string $name);

    /**
     * [getName description]
     * @return [type] [description]
     */
    public function getSku() : string;
    public function setSku(string $name);

    /**
     * [getId description]
     * @return [type] [description]
     */
    public function getDescription() : string;
    public function setDescription(string $description);

    /**
     * [getId description]
     * @return [type] [description]
     */
    public function getPrice($region, $currency) : ArticlePrice;

    /**
     * [getId description]
     * @return [type] [description]
     */
    public function getStock($region) : ArticleStock;
}