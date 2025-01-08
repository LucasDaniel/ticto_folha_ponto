<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'login']);
