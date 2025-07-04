<?php

use Illuminate\Support\Facades\Route;

// Главная
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Каталог
Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

// О нас
Route::get('/onas', function () {
    return view('onas');
})->name('onas');

// Страница модели Lisan (из папки car_model)
Route::get('/zeekr', function () {
    return view('car_model.zeekr');
})->name('zeekr');
Route::get('/byd_yangwang_u8', function () {
    return view('car_model.byd_yangwang_u8');
})->name('byd_yangwang_u8');
Route::get('/politika', function () {
    return view('politika');
})->name('politika');