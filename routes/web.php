<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

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

Route::get('/home', [UserController::class,'index']);

Route::get('/register', [RegisterController::class,'index'])->name('register');

Route::get('/home', [UserController::class,'index'])->name('conf');

Route::get('/conf', [UserController::class,'complete'])->name('complete');

//Route::post('/conf', 'UserController@show');
