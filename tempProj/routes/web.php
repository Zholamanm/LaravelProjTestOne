<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['web'])->group(function () {
    Route::get('/', [MainController::class, 'home'])->name('home');

    Route::get('/profile', [MainController::class, 'profile'])->name('profile');

    Route::get('/profile/edit', [ProfileController::class, 'profile_edit'])->name('profile_edit');

    Route::post('/profile/edit/check', [ProfileController::class, 'profile_edit_check']);

    Route::get('/about', [MainController::class, 'about']);

    Route::get('/faqs', [MainController::class, 'faqs'])->name('faqs');

    Route::post('/faqs/check', [MainController::class, 'faqs_check']);

    Route::get('/pricing', [MainController::class, 'pricing'])->name('pricing');

    Route::get('/pricing/budget/buy', [MainController::class, 'pricing_budget_buy'])->name('budget_buy');

    Route::get('/pricing/luxe/buy', [MainController::class, 'pricing_luxe_buy'])->name('luxe_buy');

    Route::get('/pricing/deluxe/buy', [MainController::class, 'pricing_deluxe_buy'])->name('deluxe_buy');

    Route::post('/pricing/budget/buy/check', [PriceController::class, 'pricing_budget_buy_check']);

    Route::post('/pricing/luxe/buy/check', [PriceController::class, 'pricing_luxe_buy_check']);

    Route::post('/pricing/deluxe/buy/check', [PriceController::class, 'pricing_deluxe_buy_check']);

    Route::get('/features', [MainController::class, 'features'])->name('features');

    Route::get('/login', [AuthController::class, 'login']);

    Route::post('/login/check', [AuthController::class, 'login_check']);

    Route::get('/sign', [AuthController::class, 'sign']);

    Route::post('/sign/check', [AuthController::class, 'sign_check']);

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return 'ID: '. $id.'. NAME: '.$name;
//});
