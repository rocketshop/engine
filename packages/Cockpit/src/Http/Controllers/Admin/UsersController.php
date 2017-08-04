<?php

namespace Rocket\Cockpit\Http\Controllers\Admin;
use \Rocket\Cockpit\Http\Controllers\Controller;
use Rocket\Fuel\User\EloquentUserRepository as UserRepository;
use Illuminate\Http\Request;

class UsersController extends Controller
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

        return view('cockpit::admin.users', $this->data);
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

        return view('cockpit::admin.user.edit', $this->data);
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function editAction($id, Request $request)
    {
        $errors = ['general' => trans('cockpit::save.failed')];

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