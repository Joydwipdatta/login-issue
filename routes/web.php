<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\logincontroller;

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
Route::view("register",'register');
Route::post('register',[logincontroller::class,'register']);


Route::view("login",'login');
//Route::post('login',[logincontroller::class,'login']);

Route::post('login',[logincontroller::class,'new']);
Route::view("home",'home');

