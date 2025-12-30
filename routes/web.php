<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tes/phq9', function () {
    return view('phq9');
});


Route::get('/tes/gad7', function () {
    return view('gad7');
});

Route::get('/tes/pss10', function () {
    return view('pss10');
});

Route::get('/tes/burnout', function () {
    return view('burnout');
});

Route::get('/tes/tidur', function () {
    return view('tidur');
});

Route::get('/tes/hargadiri', function () {
    return view('hargadiri');
});

Route::get('/hasil/phq9', function () {
    return view('phq9_result');
});

Route::get('/hasil/gad7', function () {
    return view('gad7_result');
});

Route::get('/hasil/pss10', function () {
    return view('pss10_result');
});

Route::get('/hasil/burnout', function () {
    return view('burnout_result');
});

Route::get('/hasil/tidur', function () {
    return view('tidur_result');
});

Route::get('/hasil/hargadiri', function () {
    return view('hargadiri_result');
});