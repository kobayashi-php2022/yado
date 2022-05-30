<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CommentController;

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
Route::resource('hotels', HotelController::class)->only([
    'index', 'show'
]);

//ログイン・会員登録
Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/conf', [HomeController::class,'confirm'])->name('conf');
Route::post('/complete', [HomeController::class,'complete'])->name('complete');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HotelController::class,'index'])->name('home');

    //宿予約
    // Route::get('/create', [OrderController::class, 'create'])->name('orders.form.create.get');
    Route::get('/create/{plan}', [OrderController::class, 'create'])->name('orders.form.create');
    Route::post('/orders/confirm', [OrderController::class, 'confirm'])->name("orders.confirm");
    Route::post('/orders/complete', [OrderController::class, 'complete'])->name("orders.complete");
    
    //リソースルーティング
    Route::resource('hotels', HotelController::class)->except([
        'index', 'show'
    ]);
    Route::resource('users', UserController::class);
    Route::resource('plans', PlanController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('comments', CommentController::class);
    

    //管理者トップ
    Route::get('/admin', function () {
        return view('admin/top');
    })->name('admin');

    //管理者会員情報
    Route::get('/members', [MemberController::class,'index'])->name('members.index');
    Route::delete('/ruin/{id}', [MemberController::class,'ruin'])->name('members.ruin');
    Route::delete('/members/{member}', [MemberController::class,'destroy'])->name('members.destroy');
    Route::get('/members/{member}', [MemberController::class,'show'])->name('members.show');
    Route::get('/members/{member}/edit', [MemberController::class,'edit'])->name('members.edit');
    Route::patch('/members/{member}', [MemberController::class,'update'])->name('members.update');
    
});