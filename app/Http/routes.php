<?php

Route::get('/', function () {
    return 'Belajar Laravel';
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

/* ----------------------------- DATABASE START ----------------------------- */

Route::get('products', function () {
    $products = DB::table('products')-> get();

    return view('product.index', compact('products'));
});

Route::get('products/{id}', function ($id) {
    $products = DB::table('products')-> where('ProductID',$id)->first();

    return view('product.show', compact('products'));
});

Route::get('categories', function () {
    $categories = DB::table('categories')-> get();

    return view('category.index', compact('categories'));
});

Route::get('employees', function () {
    $employees = DB::table('employees')-> get();

    return view('employees.index', compact('employees'));
});

Route::get('employees/{id}', function ($id) {
    $employees = DB::table('employees')-> where('EmployeeID',$id)->first();

    return view('employees.show', compact('employees'));
});

Route::get('suppliers', function () {
    $suppliers= DB::table('suppliers')-> get();

    return view('supplier.index', compact('suppliers'));
});

Route::get('shippers', function () {
    $shippers= DB::table('shippers')-> get();

    return view('shipper.index', compact('shippers'));
});

Route::get('customers', function () {
    $customers= DB::table('customers')-> get();

    return view('customer.index', compact('customers'));
});

Route::get('customers/{id}', function ($id) {
    $customers = DB::table('customers')-> where('CustomerID',$id)->first();

    return view('customer.show', compact('customers'));
});

Route::get('territories', function () {
    $territories= DB::table('territories')-> get();

    return view('territory.index', compact('territories'));
});

Route::get('orders', function () {
    $orders= DB::table('orders')-> get();

    return view('order.index', compact('orders'));
});

Route::get('orders/{id}', function ($id) {
    $orders = DB::table('orders')-> where('OrderID',$id)->first();

    return view('order.show', compact('orders'));
});


Route::get('order_details', function () {
    $order_details= DB::table('order_details')-> get();

    return view('order_detail.index', compact('order_details'));
});
