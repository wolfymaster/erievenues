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

// homepage
Route::get('/', function () {
	
    return view('home', [
		'venues' => [ 
			[
				'name' => 'Awesome Place',
				'description' => 'This is a cool place'
			],
			[
				'name' => 'Bob\'s Place',
				'description' => ''
			],
			[
				'name' => 'Bob\'s Place',
				'description' => ''
			],
			[
				'name' => 'Bob\'s Place',
				'description' => ''
			]
		]
	]);
});


// space show
Route::get('/space/{id}', 'SpacesController@show');

// venue show
Route::get('/venue/{venue}', 'VenuesController@show');


// contact page
Route::get('/contact', 'ContactController@create');

// booking a venue
Route::get('/booking', function () {
	return view('venue');
});

// search venues
Route::get('/search', function () {
	return view('venue');
});



