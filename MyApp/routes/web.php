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

Route::get('/', 'PageController@homepage')->name('home');
Route::get('/products', 'ProductController@index')->name('products');
Route::post('/products/store', 'ProductController@store')->name('products.store');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::get('/products/edit/{id}', 'ProductController@edit')->name('products.edit');
Route::post('/products/update/{id}', 'ProductController@update')->name('products.update');
Route::post('/products/delete/{id}', 'ProductController@delete')->name('products.delete');
Route::get('/contact-us', 'PageController@contactUs')->name('contact');
