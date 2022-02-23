<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminShopController;
use App\Http\Controllers\AdminBookingController;

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

Route::prefix('admin')->group(function(){
    Route::get('/', function () {
        if(Route::middleware('auth:admin')){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.login');
        }
    });
    Route::get('login',[LoginController::class, 'create'])->name('admin.login');
    Route::post('login',[LoginController::class,'store']);

    Route::middleware('auth:admin')->group(function(){
        Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
        Route::post('logout',[LoginController::class, 'destroy'])->name('admin.logout');
    });
});
Route::post('/manager',[AdminController::class, 'store']);
Route::get('/admin/shop', [AdminShopController::class, 'index']);
Route::post('/admin/shop', [AdminShopController::class, 'update']);
Route::get('/admin/booking', [AdminBookingController::class, 'index']);
