<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Pages\PagesController@home');
Route::get('about', 'Pages\PagesController@about')->name('about');
Route::get('products', 'Pages\PagesController@products')->name('products');
Route::get('services', 'Pages\PagesController@services')->name('services');
<<<<<<< HEAD
Route::get('client', 'Pages\PagesController@client')->name('client');
Route::get('contact', 'Pages\PagesController@contact')->name('contact');
=======
Route::get('porfolio', 'Pages\PagesController@porfolio')->name('porfolio');
>>>>>>> 73a3b3fa3ca0b62160dcb9e7c54d0b1a15765cfa
