<?php

namespace Rocket\Store\Http\Controllers;

class StoreController extends Controller
{

    public function front()
    {
        return view('store::front', $this->data);
    }
    
    public function category()
    {
        return view('store::category', $this->data);
    }
    
    public function product()
    {
        return view('store::product', $this->data);
    }
}