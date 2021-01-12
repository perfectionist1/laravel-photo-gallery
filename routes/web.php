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

Route::get('/', function () {
    return view('main');
});

Auth::routes();


Route::get('gallery', 'GalleryController@index')->name('gallery.index');

Route::get('create', 'GalleryController@create')->name('gallery.create');
Route::post('store', 'GalleryController@store')->name('gallery.store');

// Route::get('/home', 'HomeController@index')->name('home');
 