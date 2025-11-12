<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TestUser;
use App\Http\Middleware\ValidUser;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[AuthController::class,'login'])->name('login');

Route::get('register',[AuthController::class,'register'])->name('register');

Route::post('registerSave',action: [UserController::class,'registerSave'])->name('registerSave');

Route::post('loginMatch',action: [UserController::class,'loginMatch'])->name('loginMatch');


Route::get('dashboardPage',action: [UserController::class,'dashboardPage'])->name('dashboard')->middleware([ValidUser::class,TestUser::class]);

Route::get( 'dashboard/inner',action: [UserController::class,'innerPage'])->name('inner')->middleware(ValidUser::class);


Route::get('logout',action: [UserController::class,'logout'])->name('logout');



