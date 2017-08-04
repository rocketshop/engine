<?php

namespace Rocket\Ecommerce\Http\Controllers;

class AdminController extends Controller
{
    /**
     * Show the admin products.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
        return view('cockpit::admin.products', $this->data);
    }
}