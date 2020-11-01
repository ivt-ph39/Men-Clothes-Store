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
    return view('welcome');
});
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('form-login');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'Admin\DashboardController@index')->name('admin-dashboard');
// Category
Route::get('/categories', 'Admin\CategoryController@index')->name('admin-category-index');
Route::get('/categories/add', 'Admin\CategoryController@create')->name('admin-category-create');
Route::post('/categories', 'Admin\CategoryController@store')->name('admin-category-store');
Route::get('/categories/{id}/edit', 'Admin\CategoryController@edit')->name('admin-category-edit');
Route::put('/categories/{id}', 'Admin\CategoryController@update')->name('admin-category-update');
Route::delete('/categories/{id}', 'Admin\CategoryController@destroy')->name('admin-category-destroy');
// Product
Route::get('/products', 'Admin\ProductController@index')->name('admin-product-index');
Route::get('/products/add', 'Admin\ProductController@create')->name('admin-product-create');
Route::post('/products', 'Admin\ProductController@store')->name('admin-product-store');
Route::get('/products/{id}/edit', 'Admin\ProductController@edit')->name('admin-product-edit');
Route::put('/products/{id}', 'Admin\ProductController@update')->name('admin-product-update');
Route::delete('/products/{id}', 'Admin\ProductController@destroy')->name('admin-product-destroy');
// User
Route::get('/users', 'Admin\UserController@index')->name('admin-user-index');
Route::get('/users/add', 'Admin\UserController@create')->name('admin-user-create');
Route::post('/users', 'Admin\UserController@store')->name('admin-user-store');