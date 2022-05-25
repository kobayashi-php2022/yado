<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\MemberInfoController;
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

Route::get('/', [HotelController::class,'index']);

Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/conf', [UserController::class,'confirm'])->name('conf');
Route::post('/complete', [UserController::class,'complete'])->name('complete');

Route::get('/home', [HotelController::class,'index'])->name('home');
//Route::post('/conf', function(Request $request){
//});
// 最終的に消すやつ（こばやし）
Route::get('/admin', function () {
    return view('admin/top');
});

Route::get('/users', [MemberInfoController::class,'index'])->name('users');

//一覧と詳細表示だけ
Route::resource('hotels', HotelController::class);
Route::resource('plans', PlanController::class);
Route::resource('orders', OrderController::class);
Route::resource('users', MemberInfoController::class);
// Route::group(['middleware' => ['auth']] function () {
    // ログインしてないと見れないところ、ログイン機能完成したら入れます
// });
