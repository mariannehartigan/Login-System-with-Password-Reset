<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\Item2Controller;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SignedInPageController;

/* Route::get('/', function () {
    return inertia('Home');
}); */

Route::get('/', [HomeController::class, 'index']);

/* if don't use private pages don't need ->name('login') */
Route::get('login', [AuthController::class, 'create'])->name('login');
Route::post('login', [AuthController::class, 'store']);
Route::delete('logout', [AuthController::class, 'destroy']);

Route::get('register', [RegistrationController::class, 'create']);
Route::post('register', [RegistrationController::class, 'store']);


Route::get('forgotpassword', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('forgotpassword', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('resetpassword/{token}', [NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('resetpassword', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.store');



Route::resource('item', ItemController::class)->only(['store', 'update', 'destroy']);

Route::resource('item2', Item2Controller::class)->only(['index', 'store', 'update', 'destroy']);

