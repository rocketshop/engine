<?php

namespace Rocket\Store\Http\Controllers;

use Rocket\Store\ArrayArticleRepository as ArticleRepository;
use Rocket\Store\Article;
use Rocket\Cockpit\Http\Controllers\Controller as BaseController;

class ArticleController extends BaseController
{
    /**
     * Show the admin articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $articles = new ArticleRepository();

        for($i = 1; $i < 11 ; $i++) {
            $article = new Article();

            $article->fill([
                'id'            => $i,
                'article_id'    => $i,
                'sku'           => '10-' . dechex($i*13922),
                'stock'         => abs(round($i*32/12-$i*2-5))*2,
                'name'          => 'article',
                'description'   => 'lorem ipsum dolor sit amet.'
            ]);

            $articles->add($article);
        }
        
        $this->data['articles'] = $articles->getAll();

        return view('store::admin.articles', $this->data);
    }
}