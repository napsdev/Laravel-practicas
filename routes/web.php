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

//Acceso a controlador
Route::get('/', 'UserController@index');
//Facilidad de acceso al nombrar la ruta
Route::post('users', 'UserController@store')->name('user.store');
//parametro del usuario
Route::post('users/{user}', 'UserController@destroy')->name('user.destroy');


