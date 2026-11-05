<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Resource route untuk Surat Masuk
Route::resource('surat-masuk', SuratMasukController::class)
    ->parameters(['surat-masuk' => 'id']);

// Resource route untuk Surat Keluar (Latihan Mandiri)
Route::resource('surat-keluar', SuratKeluarController::class)
    ->parameters(['surat-keluar' => 'id']);