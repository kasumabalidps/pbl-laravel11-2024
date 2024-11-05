<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AdminAuth::class, 'login']);
Route::get('/login/lupa', [AdminAuth::class, 'lupaPassword']);
Route::post('/login', [AdminAuth::class, 'cekLogin']);
