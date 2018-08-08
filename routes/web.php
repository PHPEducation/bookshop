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


Route::get('/', 'HomeController@index');
Route::get('/dashboard', 'DashboardController@index')->middleware('check');

Auth::routes();

Route::get('/logout', 'HomeController@logout');
Route::get('/category/{id?}', 'CategoriesController@index');
Route::group(['prefix' => 'user', 'middleware' => 'checkUsers'], function() {
    Route::get('/edit/{id?}', 'UsersController@edit')->name('edit');
    Route::post('/edit/{id?}', 'UsersController@update')->name('update');
});
Route::group(['prefix' => 'admin'], function() {
    Route::get('/edit/{id?}', 'UserController@editProfile')->name('admin.profile.edit');
    Route::post('/edit/{id?}', 'UserController@updateProfile')->name('admin.profile.update');
});
Route::get('/sale', 'SaleController@index');
Route::get('/search', 'HomeController@getSearch');
Route::get('/book-detail/{id?}', 'BooksController@getBooks')->middleware('checkUserRate');
Route::get('/cart', 'CartController@cart');
Route::get('/cart/{id?}', 'CartController@getCart');
Route::get('/deleteCart/{id?}', 'CartController@remove');
Route::post('/updateCart/{id?}', 'CartController@update')->name('updateCart');
Route::post('/comment/{id_book?}/{id_user?}', 'RateCommentController@rateComment')->name('rateComment');
Route::get('/contact', 'HomeController@contact');

Route::resource('users', 'UserController');
Route::resource('categories', 'CategoryController');
Route::resource('books', 'BookController');
Route::resource('publishers', 'PublisherController');
Route::resource('statistics', 'StatisticController');
