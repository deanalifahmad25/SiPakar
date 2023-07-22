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

    // Data Penyakit
    Route::get('/admin/data-penyakit', [PenyakitController::class, 'index'])->name('data-penyakit');
    Route::get('/admin/data-penyakit/create', [PenyakitController::class, 'create'])->name('create.data-penyakit');
    Route::post('/admin/data-penyakit/store', [PenyakitController::class, 'store'])->name('store.data-penyakit');
    Route::get('/admin/data-penyakit/edit/{id}', [PenyakitController::class, 'edit'])->name('edit.data-penyakit');
    Route::put('/admin/data-penyakit/update/{id}', [PenyakitController::class, 'update'])->name('update.data-penyakit');
    Route::delete('/admin/data-penyakit/delete/{id}', [PenyakitController::class, 'destroy'])->name('delete.data-penyakit');

    //Data Gejala
    Route::get('/admin/data-gejala', [GejalaController::class, 'index'])->name('data-gejala');
    Route::get('/admin/data-gejala/create', [GejalaController::class, 'create'])->name('create.data-gejala');
    Route::post('/admin/data-gejala/store', [GejalaController::class, 'store'])->name('store.data-gejala');
    Route::get('/admin/data-gejala/edit/{id}', [GejalaController::class, 'edit'])->name('edit.data-gejala');
    Route::put('/admin/data-gejala/update/{id}', [GejalaController::class, 'update'])->name('update.data-gejala');
    Route::delete('/admin/data-gejala/delete/{id}', [GejalaController::class, 'destroy'])->name('delete.data-gejala');

    // Data Aturan
    Route::get('/admin/aturan', [AturanController::class, 'index'])->name('aturan');
    Route::get('/admin/aturan/create', [AturanController::class, 'create'])->name('create.aturan');
    Route::post('/admin/aturan/store', [AturanController::class, 'store'])->name('store.aturan');
    Route::get('/admin/aturan/edit/{id}', [AturanController::class, 'edit'])->name('edit.aturan');
    Route::put('/admin/aturan/update/{id}', [AturanController::class, 'update'])->name('update.aturan');
    Route::delete('/admin/aturan/delete/{id}', [AturanController::class, 'destroy'])->name('delete.aturan');

    Route::get('/admin/basis-informasi', function () {
        return view('admin.basis-informasi');
    })->name('basis-informasi');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
