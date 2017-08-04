<?php

namespace Rocket\User\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use Rocket\User\EloquentUserRepository as UserRepository;
use Illuminate\Http\Request;

class UsersController extends BaseController
{
    protected $data = []; // the information we send to the view

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        $users = new UserRepository();
        $this->data['users'] = $users->getAll();

        return view('user::admin.users', $this->data);
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = new UserRepository();
        $this->data['user'] = $users->findById($id);

        return view('user::admin.edit', $this->data);
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function editAction($id, Request $request)
    {
        $errors = ['general' => trans('user::save.failed')];

        return redirect()->back()
            ->withInput($request->all())
            ->withErrors($errors);
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function new($id)
    {

    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function newAction($id)
    {

    }
}