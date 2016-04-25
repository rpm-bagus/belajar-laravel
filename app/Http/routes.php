<?php

use Illuminate\Http\Request;

Route::get('/', function () {
  return view('welcome');
});

Route::get('about', function() {
	return View::make('pages.about');
});

Route::get('contact', function() {
	return view('pages.contact');
});

Route::get('master', function() {
  return View::make('master');
});

Route::get('friends', 'FriendController@all');

Route::resource('category', 'CategoryController');
Route::resource('product', 'ProductController');
Route::resource('employee', 'EmployeeController');
Route::resource('supplier', 'SupplierController');
Route::Resource('customer', 'CustomerController');
Route::resource('shipper', 'ShipperController');
Route::resource('order', 'OrderController');