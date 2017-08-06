<?php

namespace Rocket\Cockpit\Http\Controllers\Auth;

use Rocket\User\Http\Controllers\LoginController as UserLoginController;

class LoginController extends UserLoginController
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('cockpit::auth.login');
    }
}
