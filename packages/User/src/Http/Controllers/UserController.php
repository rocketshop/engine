<?php

namespace Rocket\User\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Rocket\User\EloquentUserRepository as UserRepository;
use Rocket\User\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    protected $data = [];
    
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['login', 'register']]);
    }

    public function profile($id = null)
    {
        if ($id) {
            $repsitory = new UserRepository();
            $this->data['user'] = $repsitory->findById($id);
        } else {
            $this->data['user'] = \Auth::user();
        }

        return view('user::profile', $this->data);
    }

    public function login()
    {
        return view('user::login', $this->data);
    }

    public function register()
    {
        return view('user::register', $this->data);
    }
}