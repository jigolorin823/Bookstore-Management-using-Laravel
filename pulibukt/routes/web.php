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

Route::get('/', function(){
    return View('welcome');
});

Auth::routes();
Route::get('/new-releases', 'PageController@newreleases')->name('newreleases');
Route::get('/best-sellers', 'PageController@bestsellers')->name('bestsellers');
Route::get('/search', 'PageController@search')->name('search');
Route::get('/home', 'HomeController@index')->name('home');


//author
Route::resource('author', 'Author\AuthorController')->except(['destroy']);
//genre
Route::resource('genre', 'Genre\GenreController')->except(['destroy']);
//book
Route::resource('book', 'Book\BookController')->except(['destroy']);
//product
Route::resource('product', 'ProductController')->except(['destroy']);
//orderline
Route::resource('orderline', 'OrderlineController')->except(['destroy']);
//order
Route::resource('order', 'OrderController')->except(['destroy']);
//payment
Route::resource('payment', 'PaymentController')->except(['destroy']);
//cart
Route::resource('cart', 'CartController');
