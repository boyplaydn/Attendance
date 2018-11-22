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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('/logout', function(){
	Auth::user()->update(['status'=>0]);
	Auth::logout();

	return redirect('/login');
})->name('user.logout');

Route::get('/home', 'HomeController@index')->name('home');
