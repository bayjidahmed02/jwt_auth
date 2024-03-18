<?php

use App\Http\Controllers\userController;
use App\Http\Middleware\CustomAuthMiddleware;
use Illuminate\Support\Facades\Route;





Route::post('/login', [userController::class, 'login']);
Route::post('/verify-login', [userController::class, 'verifyLogin']);

Route::middleware([CustomAuthMiddleware::class])->group(function () {
    Route::get('/logout', [userController::class, 'logout']);
});
