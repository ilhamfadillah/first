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

Route::get('/user', function () {
    return view('user');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/admin/add/user', function () {
    return view('add_user');
});

Route::get('/admin/add/product', function () {
    return view('add_product');
});

Route::get('/admin', 'AdminController@index');

Route::get('/layout', 'LayoutController@index');

Route::get('/layout/kedua', 'LayoutController@kedua');
