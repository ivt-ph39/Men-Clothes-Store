<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|resource
*/

Route::get('/', function () {
    return view('welcome');
})->name('wellcome');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('form-login');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::group(['nameapace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function(){

	Route::group(['middleware' => 'is.admin'], function(){
		Route::get('/', 'Admin\DashboardController@index')->name('admin-dashboard');
		// Category
		Route::resource('/categories', 'Admin\CategoryController');
		// Product
		Route::resource('/products', 'Admin\ProductController');
		// Order
		Route::get('/orders', 'Admin\OrderController@index')->name('orders.index');
		// Order Detail
		Route::get('/order-details/{id}/show', 'Admin\OrderDetailController@show')->name('order.details.show');
		// User
		Route::resource('/users', 'Admin\UserController');
		// User Role
		Route::get('/users/{id}/edit-role', 'Admin\UserController@editRole')->name('admin-user-edit-role');
		Route::put('/users/{id}/update-role', 'Admin\UserController@updateRole')->name('admin-user-update-role');
	});
	
});
