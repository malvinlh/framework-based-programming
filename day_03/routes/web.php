<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kalkulator', function () {
    return view('BikinKalkulator');
});

Route::get('/kalkulator2', function(){
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

Route::get('/kalkulator3', function(){
    return view('BikinKalkulator3');
});
