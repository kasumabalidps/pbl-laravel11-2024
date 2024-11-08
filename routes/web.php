<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuth;
use App\Http\Controllers\Auth\MahasiswaAuth;
use App\Http\Controllers\Auth\DosenAuth;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login', [AdminAuth::class, 'login_view']);
Route::post('/admin/login', [AdminAuth::class, 'cekLogin']);

Route::get('/mahasiswa/login', [MahasiswaAuth::class, 'login_view']);
Route::post('/mahasiswa/login', [MahasiswaAuth::class, 'cekLogin']);

Route::get('/dosen/login', [DosenAuth::class, 'login_view']);
Route::post('/dosen/login', [DosenAuth::class, 'cekLogin']);

Route::middleware(['roleHandler'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard_view'])->name('dashboard');
    Route::get('/dashboard/settings', [DashboardController::class, 'settings'])->name('dashboard.settings');
    Route::get('/dashboard/logout', [DashboardController::class, 'logout']);
});


