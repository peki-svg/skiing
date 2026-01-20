<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/kontakt', function () {
    return view('kontakt');
})->name('kontakt');

Route::get('/onama', function () {
    return view('onama');
})->name('onama');

Route::get('/registracija', function () {
    return view('registracija'); 
})->name('registracija');

Route::get('/uvijeti', function () {
    return view('uvijeti'); 
})->name('uvijeti');


