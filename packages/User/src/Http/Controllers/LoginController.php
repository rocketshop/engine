<?php

namespace Rocket\User\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Rocket\User\EloquentUserRepository as UserRepository;
use Rocket\User\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class LoginController extends BaseController
{
    use AuthenticatesUsers, AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
}