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

//--------------------------------------------------------------------------
//===============LOGIN=======================

Route::get('/', function () {
  return view('login.login_content');
});

Route::get('logout', function () {
  return view('login_content');
});

Route::post('login', [ 'as' => 'login', 'uses' => 'UserController@login']);
Route::get('login', 'UserController@login');
Route::post('/user/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');

//--------------------------------------------------------------------------
//===============ADMIN========================

Route::get('admin', function () {
  return view('admin');
});

Route::get('/admin', 'AdminController@index');

//--------------------------------------------------------------------------
//================PRODUCT======================
Route::get('product', function () {
  return view('product');
});

Route::get('/admin/edit/product', function () {
  return view('product/edit_product');
});

Route::group(['prefix' => 'product',  'middleware' => 'auth'], function(){
  Route::get('/', 'ProductController@index');
  Route::post('/', 'ProductController@store');
  Route::get('/{id}', 'ProductController@edit');
  Route::put('/', 'ProductController@update');
  Route::delete('/', 'ProductController@destroy');
});

Route::get('product/{id}', 'ProductController@edit');
Route::get('/admin/add/product', 'ProductController@add_product');

//--------------------------------------------------------------------------
//===================USER=============================

Route::get('user', function () {
  return view('user');
});

Route::get('/admin/add/user', function () {
  return view('user/add_user');
});

Route::get('/admin/edit/user', function () {
  return view('user/edit_user');
});

Route::group(['prefix' => 'user',  'middleware' => 'auth'], function(){
  //Route::post('/login', 'UserController@login');
  Route::get('/', 'UserController@index');
  Route::post('/', 'UserController@store');
  Route::get('/{id}', 'UserController@edit');
  Route::put('/', 'UserController@update');
  Route::delete('/', 'UserController@destroy');
});

//--------------------------------------------------------------------------
//=================SUPPLIER====================

Route::get('supplier', function () {
  return view('supplier');
});

Route::get('/admin/add/supplier', function () {
  return view('supplier/add_supplier');
});

Route::get('/admin/edit/supplier', function () {
  return view('supplier/edit_supplier');
});

Route::group(['prefix' => 'supplier',  'middleware' => 'auth'], function(){
  Route::get('/', 'SupplierController@index');
  Route::post('/', 'SupplierController@store');
  Route::get('/{id}', 'SupplierController@edit');
  Route::put('/', 'SupplierController@update');
  Route::delete('/', 'SupplierController@destroy');
});


//---------------------------------------------------------------------------
//=======================category======================

Route::get('/admin/add/category', function () {
  return view('category/category_add');
});

Route::group(['prefix' => 'category',  'middleware' => 'auth'], function(){
  Route::get('/', 'CategoryController@index');
  Route::post('/', 'CategoryController@store');
  Route::get('/{id}', 'CategoryController@edit');
  Route::put('/', 'CategoryController@update');
  Route::delete('/', 'CategoryController@destroy');
});

Route::post('select-category', ['as'=>'select-category','uses'=>'CategoryController@selectCategory']);

//--------------------------------------------------------------------------
//==============EMPLOYEE===============================

Route::get('employee', function () {
  return view('createEmployee');
});

Route::get('employee', 'EmployeeController@create'); //->name('employee.create');
Route::post('employee', 'EmployeeController@store')->name('employee.store');

//--------------------------------------------------------------------------
//================CHAINBOX==========================

Route::get('chainbox', function () {
  return view('chainbox.chainbox');
});

Route::get('chainbox', 'ChainboxController@index'); //->name('employee.create');
Route::get('myform', 'ChainboxController@myform');
Route::post('select-state', ['as'=>'select-state','uses'=>'ChainboxController@selectState']);
Route::post('select-city', ['as'=>'select-city','uses'=>'ChainboxController@selectCity']);

//---------------------------------------------------------------------------
//==================FACEBOOK LOGIN==============================

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

//--------------------------------------------------------------------------

//Auth::routes();
