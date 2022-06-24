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

Route::get('/vehicles/create', [VehicleStandController::class,'create'])->name('vehicles.create');

Route::post('/vehicles', [VehicleStandController::class,'store'])->name('vehicles.store');

Route::get('/manage', function () {
    return view('backend.manage');
})->name('manage');

Route::get('/vehicles',[VehicleStandController::class,'index'])->name('vehicles.index');
Route::delete('/vehicles/{id}',[VehicleStandController::class,'destroy'])->name('vehicles.destroy');
Route::get('/vehicles/{id}/edit',[VehicleStandController::class,'edit'])->name('vehicles.edit');
Route::put('/vehicles/{id}',[VehicleStandController::class,'update'])->name('vehicles.update');


// manageBuses
Route::get('/vehicles/manage/buses', [VehicleStandController::class,'manageBuses'])->name('vehicles.buses');
