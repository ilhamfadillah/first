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

Route::get('/', function () {
    return view('index');
});

Route::get('admin', function () {
    return view('admin');
});

Route::get('user', function () {
    return view('user');
});

Route::get('product', function () {
    return view('product');
});

Route::get('/admin/add/user', function () {
    return view('add_user');
});

Route::get('/admin/add/product', function () {
    return view('product/add_product');
});


Route::get('/admin', 'AdminController@index');

Route::get('/user', 'UserController@index');

Route::get('/product', 'ProductController@index');
Route::post('/product', 'ProductController@store');
Route::post('/product', 'ProductController@edit');
