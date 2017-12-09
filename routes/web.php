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


Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/menu', 'MenuController@index')->name('menu');

Route::post('user/changePassword', 'UserController@changePassword')->name('user.change.password');

Route::get('product/{id}', 'ProductController@detail')->name('product.detail');

Route::group(['middleware' => 'auth'], function () {
    Route::get('admin', 'AdminController@admin');
    Route::get('user/profile/{id}', ['as' => 'user.profile', 'uses' => 'UserController@profile']);
    Route::post('user/edit/avatar', 'UserController@updateAvatar')->name('user.update.avatar');
    Route::post('user/editProfile', 'UserController@editProfile')->name('user.edit.profile');
    Route::post('user/changePassword', 'UserController@changePassword')->name('user.change.password');
    Route::get('cart', ['as' => 'showCart', 'uses' => 'PagesController@showCart']);
    Route::post('cart', ['as' => 'saveCart', 'uses' => 'PagesController@saveCart']);
    Route::post('product/{id}', ['as' => 'addToCart', 'uses' => 'PagesController@addToCart']);
    Route::get('delete/{id}', ['as' => 'deleteCart', 'uses' => 'PagesController@deleteCart']);
    Route::get('cart/checkout', 'PagesController@checkout')->name('checkout');
    Route::post('checkout/{sum}', 'PagesController@checkoutSubmit')->name('chSubmit');
    Route::get('thankyou', 'PagesController@thankyou')->name('thankyou');
});
// login facebook
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

//API
Route::group(['prefix' => 'api/v1'], function () {
    Route::get('foods', 'ProductController@getdata_food');
    Route::get('drinks', 'ProductController@getdata_drink');
    Route::get('all_foods', 'ProductController@all_food');
    Route::get('all_drinks', 'ProductController@all_drink');
    // food
    Route::get('delete_food/{id}', 'ProductController@delete_food');
    Route::post('update_food/{id}', 'ProductController@update_food');
    Route::post('create_food', 'ProductController@create_food');
    // drink
});
// Admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('home', 'AdminController@home')->name('admin_home');
    Route::get('manage_food', 'AdminController@manage_food')->name('manage_food');
    Route::get('manage_drink', 'AdminController@manage_drink')->name('manage_drink');
    Route::get('manage_customer', 'AdminController@manage_customer');
});
