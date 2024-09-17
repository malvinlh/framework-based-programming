<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Coba;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contoh', function () {
    echo "Route dipanggil";
})->middleware('mencoba');