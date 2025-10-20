<?php

use Illuminate\Support\Facades\Route;

Route::get('/cadastracao', function () {
    return view('cadastracao');
});

Route::get('/cdouli', function () {
    return view('cdouli');
});

Route::get('/login', function () {
    return view('login');
});