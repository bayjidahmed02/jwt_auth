<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [userController::class, 'login']);
Route::post('/verify-login', [userController::class, 'verifyLogin']);
