<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/GetCalc1', function () {
    return view('CalcGetMethod.GetCalc1');
});

Route::get('/GetCalc2', function () {
    return view('CalcGetMethod.GetCalc2');
});

Route::get('/get_calc_2_submit', function () {
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

Route::get('/GetCalc3', function () {
    return view('CalcGetMethod.GetCalc3');
});

Route::get('/PostCalc1', [App\Http\Controllers\PostCalc1Controller::class, 'index']);
Route::post('/PostCalc1', [App\Http\Controllers\PostCalc1Controller::class, 'calculate']);

Route::any('/PostCalc2', function () {
    return view('CalcPostMethod.PostCalc2');
});