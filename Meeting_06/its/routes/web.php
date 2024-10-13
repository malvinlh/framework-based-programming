<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;


Route::resource('dosen', DosenController::class);
Route::resource('mahasiswa', MahasiswaController::class);



Route::get('/', function () {
    return view('welcome');
});
