<?php

use App\Http\Controllers\StafController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\RekamMedisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

Route::resource('staf', StafController::class);
Route::resource('dokter', DokterController::class);
Route::resource('rekam-medis', RekamMedisController::class);
Route::resource('pasien', PasienController::class);
Route::get('/pasien/{id}/delete', [PasienController::class, 'delete'])->name('pasien.delete');


Route::get('/', function () {
    return view('home');
});

