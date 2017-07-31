<?php

namespace Rocket\Ecommerce\Http\Controllers;

class StoryController extends Controller
{
    /**
     * Show the admin products.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        return view('stories::admin.stories', $this->data);
    }
}