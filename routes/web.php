<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\OrderController;

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

// 最終的に消すやつ
Route::get('/admin', function () {
    return view('admin/top');
});

//一覧と詳細表示だけ
Route::resource('hotels', HotelController::class);
Route::resource('plans', PlanController::class);
Route::resource('orders', OrderController::class);

// Route::group(['middleware' => ['auth']] function () {
    // ログインしてないと見れないところ、ログイン機能完成したら入れます
// });