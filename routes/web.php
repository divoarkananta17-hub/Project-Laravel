<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController; // Pastikan di-use jika ingin pakai resource surat-keluar

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Resource route untuk Surat Masuk (Otomatis membuat 7 route CRUD)
Route::resource('surat-masuk', SuratMasukController::class)
    ->parameters(['surat-masuk' => 'id']);

// (Opsional) Resource route untuk Surat Keluar jika sudah masuk Latihan Mandiri[cite: 7]
// Route::resource('surat-keluar', SuratKeluarController::class)
//     ->parameters(['surat-keluar' => 'id']);