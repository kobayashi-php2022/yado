<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;

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

//Route::post('/conf', function(Request $request){
//});
Route::get('/members', [MemberController::class,'index'])->name('members.index');
Route::delete('/ruin/{id}', [MemberController::class,'ruin'])->name('members.ruin');
Route::delete('/members/{member}', [MemberController::class,'destroy'])->name('members.destroy');
Route::get('/members/{member}', [MemberController::class,'show'])->name('members.show');
Route::get('/members/{member}/edit', [MemberController::class,'edit'])->name('members.edit');
Route::patch('/members/{member}', [MemberController::class,'update'])->name('members.update');


// 最終的に消すやつ（こばやし）
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
