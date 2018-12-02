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

Route::get('/', 'HomeController@home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/test', 'TestController@test');

Route::get('/login', function(){
    return redirect('home')->with('openLogin', true);
});

Route::post('/login', 'loginController@login');

Route::get('/logout', 'loginController@logout');

Route::get('/register', function(){
    return redirect('home')->with('registerNotValid', true);
});

Route::post('/register', 'registerController@validateRegister');

Route::get('/news', function() {
	return view('news');
});

Route::get('/familias', function() {
	return view('familias');
});

Route::get('/lands', function() {
	return view('lands');
});

Route::get('/familias', function() {
	return view('members');
});