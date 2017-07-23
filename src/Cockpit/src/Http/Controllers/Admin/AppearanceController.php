<?php

namespace Rocket\Cockpit\Http\Controllers\Admin;
use \Rocket\Cockpit\Http\Controllers\Controller;

class AppearanceController extends Controller
{
    protected $data = []; // the information we send to the view

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function appearance()
    {
        return view('cockpit::admin.appearance', $this->data);
    }
}