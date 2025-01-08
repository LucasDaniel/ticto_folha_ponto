<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TictoController;

Route::get('/'     , [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'login']);
Route::post('/home' , [TictoController::class, 'home']);
Route::get('/user/list' , [TictoController::class, 'userList']);
Route::get('/user/create' , [TictoController::class, 'userCreate']);
Route::post('/user/create' , [TictoController::class, 'userCreatePost']);
Route::post('/user/aaa' , [TictoController::class, 'aaa']);


