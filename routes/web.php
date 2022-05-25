<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PlanController;
<<<<<<< HEAD
use App\Http\Controllers\MemberInfoController;
=======
use App\Http\Controllers\HomeController;

>>>>>>> main
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

Route::resource('users', UserController::class);
Route::get('/index', [UserController::class,'index'])->name('mypage');
// 最終的に消すやつ
Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/conf', [HomeController::class,'confirm'])->name('conf');
Route::post('/complete', [HomeController::class,'complete'])->name('complete');

Route::get('/home', [HotelController::class,'index'])->name('home');
<<<<<<< HEAD
=======

//宿予約
Route::post('/create', [OrderController::class, 'create'])->name('orders.form.create');
Route::post('/orders/confirm', [OrderController::class, 'confirm'])->name("orders.confirm");
Route::post('/orders/complete', [OrderController::class, 'complete'])->name("orders.complete");

>>>>>>> main
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
