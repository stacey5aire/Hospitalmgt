<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AddDoctorController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PharmacyController;

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
        return view('admin.home');
    })->name('admin.dashboard');

    Route::get('/user/home', function () {
        return view('user.home');
    })->name('user.home');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logoutuser', [LoginController::class, 'logout'])->name('logoutuser');

    Route::get('/about', [AboutController::class, 'about'])->name('about');

    Route::get('/doctor', [DoctorController::class, 'doctor'])->name('doctor');

    Route::get('/news', [NewsController::class, 'news'])->name('news');

    Route::get('/admin/doctor', [DoctorController::class, 'doctorList'])->name('admin.doctor');
    Route::get('/admin/add', [AddDoctorController::class, 'index'])->name('admin.add.doctor');
    Route::get('/admin/edit', [AddDoctorController::class, 'edit'])->name('admin.edit.doctor');

    Route::get('/admin/pharmaceutical', [PharmacyController::class, 'index'])->name('admin.pharmaceutical');
    Route::get('/admin/purchase', [PharmacyController::class, 'create'])->name('admin.add.purchase');
});
