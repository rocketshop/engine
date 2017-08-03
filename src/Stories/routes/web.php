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

//stories
Route::middleware('web')->get('/stories', 'StoryController@list');
Route::middleware('web')->get('/stories/create', 'StoryController@create');
Route::middleware('web')->post('/stories/create', 'StoryController@createAction');

Route::middleware('web')->get('/story/{id}', 'StoryController@story');
Route::middleware('web')->get('/story/{id}/update', 'StoryController@update');
Route::middleware('web')->put('/story/{id}', 'StoryController@updateAction');
Route::middleware('web')->delete('/story/{id}', 'StoryController@deleteAction');

Route::middleware('web')->post('/story/{id}/comments/create', 'StoryController@createCommentAction');

// admin
Route::middleware('web')->get('/admin/stories', 'Admin\StoryController@list');
Route::middleware('web')->get('/admin/stories/categories', 'Admin\CategoryController@list');
