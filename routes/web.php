<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegistercontroller;
use App\Http\Controllers\Admin\AdminController;
use app\http\controllers\Siswacontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('guest')->group(function(){
    Route::get('/register',[loginRegistercontroller::class,'register'])->name('register');
    Route::post('/store',[loginRegistercontroller::class,'store'])->name('store');
    Route::get('/login',[loginRegistercontroller::class,'login'])->name('login');
    Route::get('/authenticate',[loginRegistercontroller::class,'authenticate'])->name('authenticate');


    
});

Route::middleware('auth','admin')->group(function(){
    Route::get('admin/dashboard',[admincontroller::class,'index'])->name('admin/dashboard');
    route::resource('/admin/siswa', Siswacontroller::class);
    Route::post('/logout',[loginRegistercontroller::class,'logout'])->name('logout');
});