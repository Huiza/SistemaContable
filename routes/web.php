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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('habitacion','HabitacionController');
Route::resource('/asiento','AsientoContableController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/asientos', 'AsientoContableController@index')->name('asiento');
