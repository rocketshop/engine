<?php

namespace Rocket\Ecommerce\Http\Controllers;

use Rocket\Fuel\Article\ArrayArticleRepository as ArticleRepository;
use Rocket\Fuel\Article\Article;

class ArticleController extends Controller
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

        return view('ecommerce::admin.articles', $this->data);
    }
}