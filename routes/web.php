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
Route::get('/product/{category_id}', 'HomeController@category')->name('category.product');
Route::get('/product/{product_id}/details', 'HomeController@product_details')->name('product.details');
Route::get('checkout','CheckoutController@cart')->name('checkout');
Route::get('checkout/submit','CheckoutController@checkout')->name('checkout.submit');
Route::post('payment/success','PaymentController@success')->name('payment.success');
Route::get('payment/confirmation','PaymentController@payment_confirmation')->name('payment.confirmation');
Route::get('payment/{order_id?}','PaymentController@index')->name('payment.index');


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
    Route::get('order','OrderController@index')->name('order');
});

Auth::routes([
    'register' => false,
    'reset'    => false,
    'verify'    => false,
]);


