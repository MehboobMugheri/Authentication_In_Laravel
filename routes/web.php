<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('register','register')->name('register');
Route::post('registerNew',[UserController::class,'register'])->name('registerNew');

Route::view('login','login')->name('login');
Route::post('loginSame',[UserController::class,'login'])->name('loginSame');

Route::get('dashboard',[UserController::class,'dashboardPage'])
        ->name('dashboard')->middleware('auth');
Route::get('dashboard/seeMore',[UserController::class,'seeMore'])
        ->name('seeMore')->middleware('auth');
        
Route::view('user','user')->name('user');
        

// Route::middleware('ValidUser')->group(function(){
//     Route::get('dashboard',[UserController::class,'dashboardPage'])->name('dashboard');

//     Route::get('dashboard/seeMore',[UserController::class,'seeMore'])->name('seeMore');
// });

Route::get('logout',[UserController::class,'logout'])->name('logout');
