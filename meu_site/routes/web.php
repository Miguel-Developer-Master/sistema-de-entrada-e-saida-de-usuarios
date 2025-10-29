<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cadastracao');
})->name('cadastramento');

Route::get('/en/cadastramento', function () {
    return view('cadastracao');
})->name('/en/cadastramento');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/en/login', function () {
    return view('enlogin');
})->name('enlogin');