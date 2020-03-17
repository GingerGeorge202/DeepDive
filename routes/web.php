<?php

use Illuminate\Support\Facades\Route;

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
})->name('/');

Auth::routes();

Route::resource('client', 'ClientController');
Route::resource('course', 'CourseController');
Route::resource('feedback', 'FeedbackController');
//Route::get('client/', 'ClientController@store')->name('client.store');
//Route::get('/client/client', 'ClientController@index')->name('client.index');
//Route::get('/client/client/edit/{id}', 'ClientController@edit')->name('client.edit');
//Route::patch('/client/client/edit/{id}', 'ClientController@update')->name('client.update');
//Route::delete('/client/client/{id}', 'ClientController@destroy')->name('client.destroy');
//Route::post('/', 'ClientController@store')->name('client.store');

Route::get('/attach', function () {
    return view('attach.attach');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
