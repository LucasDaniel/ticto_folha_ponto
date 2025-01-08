<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

Route::get('/'     , [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'login']);
Route::post('/home' , [HomeController::class, 'home']);
