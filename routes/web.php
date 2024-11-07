<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuth;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login', [AdminAuth::class, 'login_view']);
Route::post('/admin/login', [AdminAuth::class, 'cekLogin']);


Route::get('/dashboard', [DashboardController::class, 'dashboard_view'])->name('dashboard');
route::get('/dashboard/settings', [DashboardController::class, 'settings'])->name('dashboard.settings');
Route::get('/dashboard/logout', [DashboardController::class, 'logout']);


