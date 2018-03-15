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
    return view('user/add_user');
});

Route::get('/admin/edit/user', function () {
    return view('user/edit_user');
});

Route::get('/admin/add/product', function () {
    return view('product/add_product');
});

Route::get('/admin/edit/product', function () {
    return view('product/edit_product');
});

Route::get('/admin', 'AdminController@index');

Route::get('/user', 'UserController@index');
Route::post('/user', 'UserController@store');
Route::get('/user/{id}', 'UserController@edit');
Route::put('/user', 'UserController@update');
Route::delete('/user', 'UserController@destroy');

Route::get('/product', 'ProductController@index');
Route::post('/product', 'ProductController@store');
Route::get('/product/{id}', 'ProductController@edit');
Route::put('/product', 'ProductController@update');
Route::delete('/product', 'ProductController@destroy');
