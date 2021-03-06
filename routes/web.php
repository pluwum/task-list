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

Route::post('/task/{task}/state', 'MyApp\TaskController@changeState');
Route::get('/task/{task}/delete', 'MyApp\TaskController@destroy');
Route::resource('/task','MyApp\TaskController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
