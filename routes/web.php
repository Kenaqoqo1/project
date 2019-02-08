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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('post', 'PostController');
Route::resource('appoint','AppointmentController');

Route::get('/view', 'PostController@show_patient')->name('post.show_patient');

Route::post('/appoint/store/{id}', 'AppointmentController@store');
