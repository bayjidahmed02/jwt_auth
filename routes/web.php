<?php

use App\Http\Controllers\userController;
use App\Http\Middleware\AdminCheckMiddleware;
use App\Http\Middleware\CustomAuthMiddleware;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;



Route::view('/login', 'pages.login-page')->name('login');
Route::view('/verify-email', 'pages.email-verify-page');


Route::post('/login', [userController::class, 'login']);
Route::post('/verify-email', [userController::class, 'verifyLogin']);

Route::middleware([CustomAuthMiddleware::class])->group(function () {
    Route::get('/logout', [userController::class, 'logout']);
});




Route::view('/', 'pages.home-page');

Route::get('/admin', function () {
    return view('pages.admin.dashboard');
})->middleware([CustomAuthMiddleware::class])->name('admin');
