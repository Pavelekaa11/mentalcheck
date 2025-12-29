<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tes/phq9', function () {
    return view('phq9');
});

Route::get('/hasil', function () {
    return view('result');
});
