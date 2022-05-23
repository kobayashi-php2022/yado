<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PlanController;

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
    return view('reserve.index');
});

Route::get('/register', [RegisterController::class,'index'])->name('register');

Route::post('/conf', [UserController::class,'confirm'])->name('conf');

Route::post('/complete', [UserController::class,'complete'])->name('complete');

Route::get('/home', [OderController::class,'index'])->name('home');

//Route::post('/conf', function(Request $request){
//});

// 最終的に消すやつ（こばやし）
Route::get('/admin', function () {
    return view('admin/top');
});

Route::resource('hotels', HotelController::class);
Route::resource('plans', PlanController::class);

