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

/**
 * Web
 */
Route::middleware('web')->get('/store', 'StoreController@front');


Route::middleware('web')->get('/store/{category}', 'StoreController@category');


Route::middleware('web')->get('/store/products/{product}', 'StoreController@product');



/**
 * Admin
 */
Route::middleware('web')->get('/admin/store/products', 'Admin\ProductController@list');
Route::middleware('web')->get('/admin/store/articles', 'Admin\ArticleController@list');