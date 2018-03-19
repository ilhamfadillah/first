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

Route::get('login', function () {
    return view('login_content');
});

Route::get('logout', function () {
    return view('login_content');
});

Route::get('user', function () {
    return view('user');
});

Route::get('product', function () {
    return view('product');
});

Route::get('supplier', function () {
    return view('supplier');
});

Route::get('/admin/add/supplier', function () {
    return view('supplier/add_supplier');
});

Route::get('/admin/edit/supplier', function () {
    return view('supplier/edit_supplier');
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
Route::get('/login', ['as' => 'login', 'uses'=>'AdminController@login']);

Route::post('/user/login', 'UserController@login');


  Route::post('/user/login', 'UserController@login');
  Route::get('/user/logout', 'UserController@logout');
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



  Route::get('/supplier', 'SupplierController@index');
  Route::post('/supplier', 'SupplierController@store');
  Route::get('/supplier/{id}', 'SupplierController@edit');
  Route::put('/supplier', 'SupplierController@update');
  Route::delete('/supplier', 'SupplierController@destroy');
