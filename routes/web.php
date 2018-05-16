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
/*
Route::get('/', function () {
    return view('page-login');
});
*/
Route::get('/{any}', 'SpaController@index')->where('any', '.*');

/*
Route::get('/index', function () {
    return view('index');
})->name('home');

Route::get('/login', function () {
    return view('page-login');
})->name('login');

Route::get('/user', function () {
    return view('page-user');
})->name('user');

Route::get('/lockscreen', function () {
    return view('page-lockscreen');
})->name('lockscreen');

Route::get('/invoice', function () {
    return view('page-invoice');
})->name('invoice');
Route::get('/blank', function () {
    return view('blank-page');
})->name('blank');
Route::get('/mailbox', function(){
	return view('page-mailbox');
})->name('mailbox');
Route::get('/calendar', function() {
	return view('page-calendar');
})->name('calendar');
Route::get('/error', function() {
	return view('page-error');
})->name('error'); 
*/

