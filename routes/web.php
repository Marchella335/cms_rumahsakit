<?php

use App\Http\Controllers\StafController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\RekamMedisController;
use Illuminate\Support\Facades\Route;

Route::resource('staf', StafController::class);
Route::resource('dokter', DokterController::class);
Route::resource('rekam-medis', RekamMedisController::class);


Route::get('/', function () {
    return view('home');
});

