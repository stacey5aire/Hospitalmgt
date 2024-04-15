<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\ConsultController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\HomeController;



Route::get('/', [LandingController::class, 'landing']);
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

    Route::get('/user/home', [HomeController::class, 'home'])->name('user.home');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logoutuser', [LoginController::class, 'logout'])->name('logoutuser');

    Route::get('/about', [AboutController::class, 'about'])->name('about');

    Route::get('/doctor', [DoctorController::class, 'doctor'])->name('doctor');

    Route::get('/news', [NewsController::class, 'news'])->name('news');

    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

    Route::get('/appointment', [AppointmentsController::class, 'appointments'])->name('appointments');

    Route::get('/consult', [ConsultController::class, 'consult'])->name('consult');
    
});