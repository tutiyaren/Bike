<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\UserAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// 認証
Route::get('/auth/login', [UserAuthController::class, 'login'])->name('login');
Route::post('/auth/login/process', [UserAuthController::class, 'loginProcess'])->name('login.process');
Route::group(['middleware' => 'clear.session'], function () {
    Route::get('/auth/register', [UserAuthController::class, 'register'])->name('register');
    Route::post('/auth/register/process', [UserAuthController::class, 'registerProcess'])->name('register.process');
    Route::get('/auth/register-ps', [UserAuthController::class, 'password'])->name('password');
    Route::post('/auth/register-ps/process', [UserAuthController::class, 'passwordProcess'])->name('password.process');
});
Route::post('/auth/logout', [UserAuthController::class, 'logout'])->name('logout');

// トップページ
Route::get('/', [TopController::class, 'index'])->name('top');
// What is バイフページ
Route::get('/know_app', [TopController::class, 'knowApp'])->name('know.app');

