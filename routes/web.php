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

Route::get('/product', 'ProductController@index');
Route::get('/product/create', 'ProductController@create');
Route::post('/product/store', 'ProductController@store');
Route::get('/product/{id}/edit', 'ProductController@edit');
Route::put('/product/{id}', 'ProductController@update');
Route::delete('/product/{id}/delete', 'ProductController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');