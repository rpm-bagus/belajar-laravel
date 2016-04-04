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

Route::get('friends', function() {
	$followers = ['Andi', 'Bobi', 'Candra', 'Dedi'];
	$following = ['Amelia', 'Barbara', 'Cindy', 'Debora'];

	return view('pages.friend',
		compact('followers', 'following')
	);
});
