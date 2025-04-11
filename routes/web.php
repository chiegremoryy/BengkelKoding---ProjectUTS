<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;

Route::get('/', function () {
    return view('welcome');
});

//routes untuk authentication login/register
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

//routes untuk role pasien
Route::get('/pasien', [PasienController::class, 'index'])->name('dashboardPasien');
Route::get('/pasien/periksa', [PasienController::class, 'showPeriksa'])->name('periksaPasien');
Route::post('/pasien/periksa', [PasienController::class, 'create'])->name('periksaCreate');

//routes untuk role dokter
Route::get('/dokter', [DokterController::class, 'index'])->name('dashboardDokter');
Route::get('/dokter/memeriksa', [DokterController::class, 'showMemeriksa'])->name('memeriksaDokter');
Route::get('/dokter/memeriksa/{id}/edit', [DokterController::class, 'editMemeriksa'])->name('memeriksaEdit');
Route::put('/dokter/memeriksa/{id}/edit', [DokterController::class, 'update'])->name('memeriksaUpdate');
Route::get('/dokter/obat', [DokterController::class, 'showObat'])->name('obatDokter');
Route::post('/dokter/obat', [DokterController::class, 'createObat'])->name('obatCreate');
Route::put('/dokter/obat/{id}/edit', [DokterController::class, 'updateObat'])->name('obatUpdate');
Route::get('/dokter/obat/{id}/edit', [DokterController::class, 'editObat'])->name('obatEdit');
Route::delete('/dokter/obat/{id}', [DokterController::class, 'deleteObat'])->name('obatDelete');