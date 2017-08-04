<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// web
Route::middleware('web')->get('/login', 'UserController@login');
Route::middleware('web')->get('/register', 'UserController@register');

// admin

Route::middleware('web')->get('/admin/users', 'Admin\UsersController@users');

Route::middleware('web')->get('/admin/user', 'Admin\UsersController@new');
Route::middleware('web')->post('/admin/user', 'Admin\UsersController@newAction');

Route::middleware('web')->get('/admin/user/{id}', 'Admin\UsersController@edit');
Route::middleware('web')->post('/admin/user/{id}', 'Admin\UsersController@editAction');
