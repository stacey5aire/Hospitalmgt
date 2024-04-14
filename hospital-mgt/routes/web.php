<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/login', [LoginController::class, 'verify_login'])->name('login.verify');
// Route::post('/dashboard', [DashBoardController::class, 'index'])->name('admin.dashboard')->dddddddmiddleware("auth");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/user/home', function () {
        return view('user.home');
    })->name('user.home');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});