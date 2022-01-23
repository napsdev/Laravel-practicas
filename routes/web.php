<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

//Forma antigua de hacerlo
//Route::get('/', 'UserController@index');
//Forma de laravel 8
Route::get('/',[UserController::class, 'index']);
//Facilidad de acceso al nombrar la ruta
Route::post('users',[UserController::class, 'store'])->name('user.store');
//parametro del usuario
Route::post('users/{user}',[UserController::class, 'destroy'])->name('user.destroy');


