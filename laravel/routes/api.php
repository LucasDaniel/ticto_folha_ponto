<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/user/all',[UserController::class, 'list']);
Route::get('/user/{id}',[UserController::class, 'show']);
Route::post('/user',[UserController::class, 'createNewUser']);
Route::put('/user/{id}',[UserController::class, 'update']);
Route::delete('/user/{id}',[UserController::class, 'deleteUserAndUsuarioAutenticacao']);
