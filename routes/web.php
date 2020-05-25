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
