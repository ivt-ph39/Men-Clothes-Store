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
})->name('wellcome');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('form-login');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::group(['nameapace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function(){
	Route::group(['middleware' => 'is.admin'], function(){
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
		// Order
		Route::get('/orders', 'Admin\OrderController@index')->name('admin-order-index');
		Route::get('/orders/{id}/show', 'Admin\OrderController@show')->name('admin-order-show');
		// User
		Route::get('/users', 'Admin\UserController@index')->name('admin-user-index');
		Route::get('/users/add', 'Admin\UserController@create')->name('admin-user-create');
		Route::post('/users', 'Admin\UserController@store')->name('admin-user-store');
		Route::get('/users/{id}/show', 'Admin\UserController@show')->name('admin-user-show');
		Route::get('/users/{id}/edit', 'Admin\UserController@edit')->name('admin-user-edit');
		Route::put('/users/{id}', 'Admin\UserController@update')->name('admin-user-update');
		Route::delete('/users/{id}', 'Admin\UserController@destroy')->name('admin-user-destroy');

		Route::get('/users/{id}/edit-role', 'Admin\UserController@editRole')->name('admin-user-edit-role');
		Route::put('/users/{id}/update-role', 'Admin\UserController@updateRole')->name('admin-user-update-role');
	});
	
});
