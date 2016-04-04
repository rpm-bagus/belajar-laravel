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

Route::get('friends', 'FriendController@all');

Route::get('products', 'ProductController@index');
