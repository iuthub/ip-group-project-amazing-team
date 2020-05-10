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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
Route::get('/',  'Users\UsersController@index')->name('index');
Route::post('/search','Users\UsersController@search' )->name('users.search');
Route::get('/category','Users\UsersController@category' )->name('users.category');
Route::get('/show/{id}','Users\UsersController@show' )->name('users.show');

Route::get('/home', 'HomeController@index')->name('home');
