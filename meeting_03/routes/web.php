<?php
namespace App\Http\Controller;
use App\Http\Controllers\CalculatorController;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/kalkulator', function () {
    return view('BikinKalkulator');
});

Route::get('/kalkulator2', function () {
    return view('BikinKalkulator2');
});

Route::get('/calc_2_submit', function () {
    if ($_GET) {
        echo '<p>Nilai A : ' . htmlspecialchars($_GET['nilaia']) . '</p>';
        echo '<p>Nilai B : ' . htmlspecialchars($_GET['nilaib']) . '</p>';
        echo '<p>Operator : ' . htmlspecialchars($_GET['operator']) . '</p>';
        if ($_GET['operator']) {
            $result = 0;
            if ($_GET['operator'] == '+') {
                $result = $_GET['nilaia'] + $_GET['nilaib'];
            } else if ($_GET['operator'] == '-') {
                $result = $_GET['nilaia'] - $_GET['nilaib'];
            } else if ($_GET['operator'] == '*') {
                $result = $_GET['nilaia'] * $_GET['nilaib'];
            } else if ($_GET['operator'] == '/') {
                $result = $_GET['nilaia'] / $_GET['nilaib'];
            }
            echo '<div class="alert alert-info mt-3">Hasil: ' . $result . '</div>';
        }
    }
});

Route::get('/kalkulator3', function () {
    return view('BikinKalkulator3');
});

Route::any('/kalkulator5', function () {
    return view('BikinKalkulator5');
});

Route::get('/kalkulator4', [CalculatorController::class, 'index']);
Route::post('/kalkulator4', [CalculatorController::class, 'calculate']);