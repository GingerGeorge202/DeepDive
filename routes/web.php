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

Route::get('admin/',function (){
    return view('admin.main');
});

Auth::routes();

//Route::resource('client', 'ClientController');
//Route::get('client/', 'ClientController@store')->name('client.store');
Route::get('/admin/client', 'ClientController@index')->name('client.index');
Route::get('/admin/client/edit/{id}', 'ClientController@edit')->name('client.edit');
Route::patch('/admin/client/edit/{id}', 'ClientController@update')->name('client.update');
Route::delete('/admin/client/{id}', 'ClientController@destroy')->name('client.destroy');
Route::post('/', 'ClientController@store')->name('client.store');

Route::get('/home', 'HomeController@index')->name('home');
