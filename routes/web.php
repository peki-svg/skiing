<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistracijaController;


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

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::post('/registracija', [RegistracijaController::class, 'store'])
    ->name('registracija.store');
    
/*

Route::get('/', function () {
    $posts = Post::with('user')->latest()->get();
    return view('welcome', compact('posts'));
});*/

