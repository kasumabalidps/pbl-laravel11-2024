<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AdminAuth::class, 'login']);
Route::post('/login', [AdminAuth::class, 'cekLogin']);
Route::get('/login/lupa', [AdminAuth::class, 'lupaPassword']);

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
