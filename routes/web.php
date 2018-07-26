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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::get('/statistic' , 'StatisticController@index')->name('statistic');

Route::resource('users' , 'UserController');
Route::resource('categories' , 'CategoryController' );
Route::resource('books' , 'BookController' );
Route::resource('publishers' , 'PublisherController' );
