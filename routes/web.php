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

Auth::routes();

Route::get('/', 'IndexController@index');
Route::get('/admin', 'IndexController@showAdminPage');
Route::get('/product/{id}', 'IndexController@product');
Route::get('/category/{id}', 'IndexController@category');
Route::post('/orders/store', 'OrderController@store');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/orders', 'IndexController@orders');
    Route::get('/admin/categories','CategoryController@index');
    Route::get('/admin/categories/create','CategoryController@create');
    Route::post('/admin/categories/store','CategoryController@store');
    Route::get('/admin/categories/edit/{id}','CategoryController@edit');
    Route::get('/admin/categories/show/{id}','CategoryController@show');
    Route::delete('/admin/categories/destroy/{id}','CategoryController@destroy');
    Route::post('/admin/categories/update/{id}','CategoryController@update');
    Route::get('/admin/goods','GoodController@index');
    Route::get('/admin/goods/create','GoodController@create');
    Route::post('/admin/goods/store','GoodController@store');
    Route::get('/admin/goods/edit/{id}','GoodController@edit');
    Route::get('/admin/goods/show/{id}','GoodController@show');
    Route::delete('/admin/goods/destroy/{id}','GoodController@destroy');
    Route::post('/admin/goods/update/{id}','GoodController@update');
    Route::get('/admin/orders','OrderController@index');
    Route::get('/admin/email','EmailController@index');
    Route::post('/admin/email/store','EmailController@store');
});