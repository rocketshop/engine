<?php

namespace Rocket\Store\Http\Controllers\Admin;

use Rocket\Cockpit\Http\Controllers\Controller as BaseController;
use Rocket\Store\ArrayProductRepository as ProductRepository;
use Rocket\Store\Product;

class ProductController extends BaseController
{
    /**
     * Show the admin products.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $products = new ProductRepository();

        for($i = 1; $i < 11 ; $i++) {
            $product = new Product();

            $product->fill([
                'id'            => $i,
                'product_id'    => $i,
                'name'          => 'product'
            ]);

            $products->add($product);
        }
        
        $this->data['products'] = $products->getAll();

        return view('store::admin.products', $this->data);
    }
}