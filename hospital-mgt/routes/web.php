<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AddDoctorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConsultController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\PatientsController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/login', [LoginController::class, 'verify_login'])->name('login.verify');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get(
        '/admin/dashboard',
        [DashBoardController::class, 'index']
    )->name('admin.dashboard');

    Route::get('/user/home', function () {
        return view('user.home');
    })->name('user.home');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logoutuser', [LoginController::class, 'logout'])->name('logoutuser');

    //USER Routes

    Route::get('/about', [AboutController::class, 'about'])->name('about');
    Route::get('/doctor', [DoctorController::class, 'doctor'])->name('doctor');
    Route::get('/news', [NewsController::class, 'news'])->name('news');
    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('/appointment', [AppointmentsController::class, 'appointments'])->name('appointments');
    Route::get('/consult', [ConsultController::class, 'consult'])->name('consult');
    Route::post('user/logout', [LoginController::class, 'logout'])->name('user.logout');
    Route::get('/about', [AboutController::class, 'about'])->name('about');



    //ADMIN Routes.
    Route::get('/admin/doctor', [DoctorController::class, 'doctorList'])->name('admin.doctor');
    Route::get('/admin/add', [AddDoctorController::class, 'index'])->name('admin.add.doctor');
    Route::get('/admin/edit/{id}', [AddDoctorController::class, 'edit'])->name('admin.edit.doctor');
    Route::get('/admin/delete/{id}', [AddDoctorController::class, 'delete'])->name('admin.delete.doctor');
    Route::get('/admin/pharmaceutical', [PharmacyController::class, 'index'])->name('admin.pharmaceutical');
    Route::get('/admin/add/purchase', [PharmacyController::class, 'create'])->name('admin.add.purchase');
    Route::get('/admin/patients', [PatientsController::class, 'index'])->name('admin.patients');

    Route::get('/admin/lab', [LabController::class, 'index'])->name('admin.lab.order');




    Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
});