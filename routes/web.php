<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;

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

Route::post('/conf', function(Request $request){
});

Route::post('/conf', [App\Http\Controllers\UserController::class, 'postData']);

Route::get('/form/','Form\FormController@index');
Route::post('/form/confirm/','Form\FormController@confirm');
Route::post('/form/complete/','Form\FormController@complete');