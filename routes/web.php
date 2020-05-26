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

// authentication routes
Auth::routes();

// homepage
Route::get('/', 'HomeController@index')->name('home');


// venue show
Route::get('/venue/{id}', 'VenuesController@show');

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
