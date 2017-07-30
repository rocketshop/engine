<?php

namespace Rocket\Ecommerce\Http\Controllers;

use Rocket\Fuel\Product\ArrayProductRepository as ProductRepository;
use Rocket\Fuel\Product\Product;

class ProductController extends Controller
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

        return view('ecommerce::admin.products', $this->data);
    }
}