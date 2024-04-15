<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
<<<<<<< HEAD
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
=======

Route::get('/', function () {
    return view('welcome');
});
Route::post('/login/verification', [LoginController::class, 'verify_login'])->name('login.verification');
>>>>>>> 5d96f54be2d3340f2c77c08bd6fe5e6526e3a95f

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/admin/home', function () {
        return view('admin.home');
    })->name('admin.home');

    Route::get('/user/home', [HomeController::class, 'home'])->name('user.home');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

<<<<<<< HEAD
    Route::post('/logoutuser', [LoginController::class, 'logout'])->name('logoutuser');

    Route::get('/about', [AboutController::class, 'about'])->name('about');

    Route::get('/doctor', [DoctorController::class, 'doctor'])->name('doctor');

    Route::get('/news', [NewsController::class, 'news'])->name('news');

    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

    Route::get('/appointment', [AppointmentsController::class, 'appointments'])->name('appointments');

    Route::get('/consult', [ConsultController::class, 'consult'])->name('consult');
    
});
=======
    Route::post('user/logout', [LoginController::class, 'logout'])->name('user.logout');
    Route::get('/about', [AboutController::class, 'about'])->name('about');
});
>>>>>>> 5d96f54be2d3340f2c77c08bd6fe5e6526e3a95f
