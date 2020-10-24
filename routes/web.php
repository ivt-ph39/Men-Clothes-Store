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
Route::get('/home', 'Admin\DashboardController@index')->name('admin-dashboard');
Route::get('/categories', 'Admin\CategoryController@index')->name('admin-category-index');
Route::get('/categories/add', 'Admin\CategoryController@create')->name('admin-category-create');
Route::post('/categories', 'Admin\CategoryController@store')->name('admin-category-store');
