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

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function (){
    Route::get('dashboard','DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('user','UserController');
    Route::resource('category','CategoryController');
    Route::resource('vendor','VendorController');
    Route::resource('product','ProductController');
    Route::get('product/{product_id}/images','ProductController@images')->name('product.images');
    Route::get('product/{product_id}/images/create','ProductController@images_create')->name('product.images.create');
    Route::post('product/{product_id}/images/store','ProductController@images_store')->name('product.images.store');
    Route::put('product/{image_id}/image/update','ProductController@image_update')->name('product.image.update');
    Route::delete('product/{image_id}/image/delete','ProductController@image_delete')->name('product.image.delete');
});

Auth::routes([
    'register' => false,
    'reset'    => false,
    'verify'    => false,
]);

Route::get('/home', 'HomeController@index')->name('home');
