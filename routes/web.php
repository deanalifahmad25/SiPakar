<?php

use App\Http\Controllers\Admin\AturanController;
use App\Http\Controllers\Admin\GejalaController;
use App\Http\Controllers\Admin\PenyakitController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginGoogleController;
use App\Http\Controllers\MissingPageController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/panduan', function () {
    return view('panduan');
})->name('panduan');

Route::get('/missing-page', [MissingPageController::class, 'index'])->name('missing-page');

// Users
//socialite routes
Route::get('sign-in-google', [LoginGoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('auth/google/callback', [LoginGoogleController::class, 'handleGoogleCallback']);

Route::middleware('auth', 'verified', 'user')->group(function () {
    Route::get('/success-register', function () {
        return view('layouts.success-register');
    })->name('success-register');

    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');

    Route::get('/diagnosa', [DiagnosaController::class, 'index'])->name('diagnosa');
    Route::post('/hasil-diagnosa', [DiagnosaController::class, 'diagnosa'])->name('process.diagnosa');
});

// Admin
Route::middleware('auth', 'verified', 'admin')->name('admin.')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/admin/data-penyakit', [PenyakitController::class, 'penyakit'])->name('data-penyakit');

    Route::get('/admin/data-gejala', [GejalaController::class, 'gejala'])->name('data-gejala');

    Route::get('/admin/basis-informasi', function () {
        return view('admin.basis-informasi');
    })->name('basis-informasi');

    Route::get('/admin/aturan', [AturanController::class, 'aturan'])->name('aturan');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
