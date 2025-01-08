<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiteController;

Route::get('/'     , [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'login']);
Route::post('/home' , [SiteController::class, 'home']);



