<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/create', [MahasiswaController::class,'create'])->name('mahasiswa.create');
Route::post('/', [MahasiswaController::class,'store'])->name('mahasiswa.store');
Route::get('/{mahasiswa}/edit', [MahasiswaController::class,'edit'])->name('mahasiswa.edit');
Route::put('/{mahasiswa}/update', [MahasiswaController::class,'update'])->name('mahasiswa.update');
Route::delete('/{mahasiswa}/delete', [MahasiswaController::class,'delete'])->name('mahasiswa.delete');
