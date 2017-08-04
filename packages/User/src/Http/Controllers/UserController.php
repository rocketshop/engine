<?php

namespace Rocket\User\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Rocket\User\EloquentUserRepository as UserRepository;
use Rocket\User\User;
use Illuminate\Http\Request;

class ProfileController extends BaseController
{
    protected $data = [];

    public function profile()
    {
        $this->data['user'] = \Auth::user();
        return view('users::profile', $this->data);
    }

    public function login()
    {
        return view('user::login', $this->data);
    }

    public function register()
    {
        return view('user::register', $this->data);
    }


    public function loginAction() 
    {
        return back();
    }

    public function registerAction() 
    {
        return back();
    }
}