<?php

namespace Rocket\Stories\Http\Controllers;

class CategoryController extends Controller
{
    /**
     * Show the admin products.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        return view('stories::admin.categories', $this->data);
    }
}