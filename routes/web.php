<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\RegisterController;

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

Route::controller(AuthController::class)->group(function () {
    // Login
    Route::get('login', 'index')->name('index')->middleware('guest');
    Route::post('login', 'login')->name('login');
    Route::get('logout', 'logout')->name('logout');
});
Route::controller(RegisterController::class)->group(function () {
    // Register
    Route::get('register', 'index')->name('register.index');
    Route::post('register/save', 'store')->name('register.store');
});

Route::group(['middleware' => ['auth:web']], function () {
    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(['middleware' => ['checkUser:1']], function () {
        // Daftar Anggota
        Route::get('daftar-anggota', [AnggotaController::class, 'index'])->name('anggota.index');
        Route::get('daftar-anggota/{id}/verifikasi', [AnggotaController::class, 'verifikasi'])->name('anggota.verifikasi');
        Route::post('daftar-anggota/terima/{id}', [AnggotaController::class, 'terima'])->name('anggota.terima');
        Route::get('daftar-anggota/{id}/detail', [AnggotaController::class, 'detail'])->name('anggota.detail');
    });
});

require __DIR__ . '/front.php';
