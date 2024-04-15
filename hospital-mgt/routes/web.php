<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/login/verification', [LoginController::class, 'verify_login'])->name('login.verification');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/admin/home', function () {
        return view('admin.home');
    })->name('admin.home');

    Route::get('/user/home', function () {
        return view('user.home');
    })->name('user.home');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('user/logout', [LoginController::class, 'logout'])->name('user.logout');
    Route::get('/about', [AboutController::class, 'about'])->name('about');
});
