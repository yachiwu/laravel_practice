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
})->name('welcome');
Route::get('/', 'TestController@welcome')->name('welcome');
// 除了destroy這個action不要外其他action都要
Route::resource('/posts', 'PostController')->except(['destroy']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('article', 'ArticleController');
