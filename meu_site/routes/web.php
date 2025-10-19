<?php

use Illuminate\Support\Facades\Route;

Route::get('/cadastracao', function () {
    return view('cadastracao');
});

Route::get('/cadastracaooulogin', function () {
    return view('cdouli');
});

Route::get('/login', function () {
    return view('login');
});