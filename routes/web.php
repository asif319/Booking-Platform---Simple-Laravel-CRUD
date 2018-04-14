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
Route::get('/', 'CreateController@index');
Route::get('/list-layout', 'CreateController@listLayout');
Route::get('/blog', 'CreateController@blog');
Route::get('/contact', 'CreateController@contact');
Route::get('/reviews', 'CreateController@reviews');
Route::get('/bookmarks', 'CreateController@bookmarks');
Route::get('/user-booking', 'CreateController@userBooking');
Route::get('/coming-soon', 'CreateController@comingSoon');
Route::get('/message', 'CreateController@message');
Route::get('/bookings', 'CreateController@bookings');
Route::get('/invoice', 'CreateController@invoice');
Route::get('/dashboard', 'CreateController@getDashboard');
Route::get('/add-listing', 'CreateController@create');
//Route::get('/index', 'CreateController@index');
Route::get('/show-listing/{id}', 'CreateController@show');
Route::post('/list', 'CreateController@store');
//Route::get('/my-list', 'CreateController@showEdit');
Route::get('/my-list/{name}', 'CreateController@showEdit');
Route::get('/list-edit/{id}', 'CreateController@edit');
Route::post('/list-update/{id}','CreateController@update');
Route::get('/list-delete/{id}','CreateController@destroy');
Route::get('/profile','CreateController@profile');
Route::get('/profile-image','CreateController@profileImage');
Route::post('/profile-image','CreateController@updateProfileImage');

//Route::get('/welcome', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();



