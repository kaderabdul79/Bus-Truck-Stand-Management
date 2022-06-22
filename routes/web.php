<?php

use App\Http\Controllers\VehicleStandController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/search', function () {
    return view('frontend.CheckStandReceipt');
})->name('CheckStandReceipt');

Route::get('/admin', function () {
    return view('backend.master');
})->name('admin');

Route::get('/admin', function () {
    return view('backend.master');
})->name('admin');

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');

Route::get('/bus-truck-entry-form', function () {
    return view('backend.bus-truck-entry-form');
})->name('entry-form');

Route::post('/bus-truck-entry-form', [VehicleStandController::class,'store'])->name('entry.store');

Route::get('/manage-buses-entry', function () {
    return view('backend.manage-buses-entry');
})->name('manage-buses-entry');

Route::get('/vehicles',[VehicleStandController::class,'index'])->name('vehicles.index');
Route::delete('/vehicles/{id}',[VehicleStandController::class,'destroy'])->name('vehicles.destroy');
