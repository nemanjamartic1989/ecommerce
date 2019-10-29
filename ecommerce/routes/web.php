<?php

// Front End Location:
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'HomeController@shop')->name('shop');
Route::get('/category/{id}', 'HomeController@showCategory');
Route::get('/contact', function(){
	return view('front.contact');
});
Route::get('/productDetail/{id}', 'HomeController@productDetail');

// Cart location:
Route::get('/cart', 'CartController@index');
Route::get('/cart/addItem/{id}', 'CartController@addItem');
Route::put('/cart/update/{id}', 'CartController@update');
Route::get('/cart/remove/{id}', 'CartController@destroy');

// Admin Location:
Auth::routes();
Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'admin']], function(){ // protected all admin section.
	Route::get('/', function(){
		return view('admin.index');
	});
	Route::resource('product', 'ProductController');
	Route::resource('categories', 'CategoryController');
});
