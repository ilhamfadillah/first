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
    return view('login.login_content');
});

Route::get('admin', function () {
    return view('admin');
});

Route::get('employee', function () {
    return view('createEmployee');
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



Route::get('chainbox', function () {
  return view('chainbox.chainbox');
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

Route::get('/admin/add/category', function () {
    return view('category/add_category');
});

Route::get('/admin', 'AdminController@index');



Route::post('/user/login', 'UserController@login');

Route::group(['prefix' => 'user',  'middleware' => 'auth'], function(){
  //Route::post('/login', 'UserController@login');
  Route::get('/logout', 'UserController@logout');
  Route::get('/', 'UserController@index');
  Route::post('/', 'UserController@store');
  Route::get('/{id}', 'UserController@edit');
  Route::put('/', 'UserController@update');
  Route::delete('/', 'UserController@destroy');
});

Route::group(['prefix' => 'product',  'middleware' => 'auth'], function(){
  Route::get('/', 'ProductController@index');
  Route::post('/', 'ProductController@store');
  Route::get('/{id}', 'ProductController@edit');
  Route::put('/', 'ProductController@update');
  Route::delete('/', 'ProductController@destroy');
});

Route::group(['prefix' => 'supplier',  'middleware' => 'auth'], function(){
  Route::get('/', 'SupplierController@index');
  Route::post('/', 'SupplierController@store');
  Route::get('/{id}', 'SupplierController@edit');
  Route::put('/', 'SupplierController@update');
  Route::delete('/', 'SupplierController@destroy');
});

Route::get('employee', 'EmployeeController@create'); //->name('employee.create');
Route::post('employee', 'EmployeeController@store')->name('employee.store');


//Chainbox

Route::get('myform', 'ChainboxController@myform');

Route::post('select-ajax', ['as'=>'select-ajax','uses'=>'ChainboxController@selectAjax']);
