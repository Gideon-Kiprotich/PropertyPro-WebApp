<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', [AuthController::class, 'login']);
Route::post('login_post', [AuthController::class, 'login_post']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'register_post']);


Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'admin_dashboard']);
});

Route::group(['middleware' => 'user'], function () {
    Route::get('user/dashboard', [DashboardController::class, 'user_dashboard']);
});

Route::group(['middleware' => 'vendor'], function () {
    Route::get('vendor/dashboard', [DashboardController::class, 'vendor_dashboard']);
});

