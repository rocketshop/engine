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

Route::middleware('web')->get('/admin', 'Controller@redirect');
Route::middleware('web')->get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::middleware('web')->post('/admin/login', 'Auth\LoginController@login');
Route::middleware('web')->get('/admin/logout', 'Auth\LoginController@logout');

Route::middleware('web')->get('/admin/dashboard', 'AdminController@dashboard');
Route::middleware('web')->get('/admin/appearance', 'Admin\AppearanceController@appearance');
Route::middleware('web')->post('/admin/appearance', 'Admin\AppearanceController@appearanceAction');

Route::middleware('web')->get('/admin/settings', 'Admin\SettingsController@settings');
Route::middleware('web')->post('/admin/settings', 'Admin\SettingsController@settingsAction');
