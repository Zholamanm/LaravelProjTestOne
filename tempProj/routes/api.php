<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDetailsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/login', [AuthController::class, 'login_api']);

Route::middleware('auth:sanctum')->group(function () {
    // Все API маршруты для авторизованных пользователей
    Route::resource('user', UserController::class);
    Route::resource('userdetails', UserDetailsController::class);

    Route::put('user/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

    // Явные маршруты для UserDetailsController
    Route::put('userdetails/{userdetail}', [UserDetailsController::class, 'update'])->name('userdetails.update');
    Route::delete('userdetails/{userdetail}', [UserDetailsController::class, 'destroy'])->name('userdetails.destroy');
});

