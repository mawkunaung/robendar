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
Route::get('main','FrontendController@main')->name('main');

Route::get('about','FrontendController@about')->name('about');

Route::get('contact','FrontendController@contact')->name('contact');

Route::get('booking','FrontendController@booking')->name('booking');
Route::get('logins','FrontendController@login')->name('logins');
Route::get('registers','FrontendController@register')->name('registers');






// Route::get('/', function () {
//     return view('welcome');
// });
Route::group([
	'middleware'=>['role:Admin']
],function(){

Route::get('dashboard', 'BackendController@dashboard')->name('dashboard');


Route::resource('services','ServiceController');

Route::resource('roomtypes','RoomtypeController');

Route::resource('rooms','RoomController');
Route::resource('users','UserController');
Route::resource('bookings','BookingController');
Route::resource('checkins','CheckinController');

})	;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
