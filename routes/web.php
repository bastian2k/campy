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

// Route::get('/', function () { return view('welcome'); });
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/teilnahmebedingungen', function() { return view('legal.terms');} );
Route::get('/datenschutz', function() { return view('legal.privacy');} );

Route::get('/', 'WelcomeController@index');
Route::get('mycamps/create/{camp}', 'CampUserController@create');
Route::resource('mycamps', 'CampUserController');
Route::resource('camps', 'CampController');
Route::resource('users', 'UserController');
Route::resource('admin', 'CampAdminController');