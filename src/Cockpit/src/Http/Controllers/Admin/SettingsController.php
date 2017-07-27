<?php

namespace Rocket\Cockpit\Http\Controllers\Admin;
use \Rocket\Cockpit\Http\Controllers\Controller;

class SettingsController extends Controller
{
    protected $data = []; // the information we send to the view

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        return view('cockpit::admin.settings', $this->data);
    }
}