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

// Route::get('/', function () {
//     return view('home');
// });

use App\Http\Middleware\CekUsia;

Route::get('/', 'HomeController@index');


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/xyz', function() {
	return view ('xyz');
})->middleware('auth');

Route::get('/cekusia', function() {
	return view ('usia');
})->middleware(CekUsia::class);

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');
