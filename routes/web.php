<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login', [AdminAuth::class, 'login_view']);
Route::post('/admin/login', [AdminAuth::class, 'cekLogin']);

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
