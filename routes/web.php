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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/upload', 'uploadController@store')->name('store');

Route::get('/search', 'SearchController@index')->name('search');

Route::post('/upload', 'uploadController@upload')->name('upload');

Route::post('/searchresults', 'SearchController@search')->name('searchquery');

// Route::get('/profile/{name}', 'ProfileController@index')->name('profile');

Route::get('profile/{id}/{name}', [
'as' => 'profile', 'uses' => 'ProfileController@index']);
