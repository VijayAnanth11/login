<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\InitialController;
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
Route::view('register','auth.register');
Route::post('store',[RegisterController::class,'store']);
Route::view('home','home');
Route::view('login','auth.login');
Route::post('authenticate',[LoginController::class,'authenticate']);
Route::get('logout',[LoginController::class,'logout']);
Route::view('initial','auth.initial');

Route::get('reg',[RegisterController::class,'reg']);
Route::get('log',[LoginController::class,'log']);




