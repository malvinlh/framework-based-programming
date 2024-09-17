<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Coba;

Route::get('/', function () {
    return view('welcome');
});

// Route Middleware
Route::get('/contoh', function () {
    echo "Route dipanggil";
})->middleware(Coba::class);