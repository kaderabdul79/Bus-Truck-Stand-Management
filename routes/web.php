<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/search', function () {
    return view('frontend.CheckStandReceipt');
})->name('CheckStandReceipt');

Route::get('/admin', function () {
    return "admin";
})->name('admin');
