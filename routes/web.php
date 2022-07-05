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

Route::get('/dashboard', [VehicleStandController::class,'countVehicles'])->name('dashboard');

Route::get('/vehicles/create', [VehicleStandController::class,'create'])->name('vehicles.create');

Route::post('/vehicles', [VehicleStandController::class,'store'])->name('vehicles.store');

Route::get('/manage', function () {
    return view('backend.manage');
})->name('manage');

Route::get('/vehicles',[VehicleStandController::class,'index'])->name('vehicles.index');
Route::delete('/vehicles/{id}',[VehicleStandController::class,'destroy'])->name('vehicles.destroy');
Route::get('/vehicles/{id}/edit',[VehicleStandController::class,'edit'])->name('vehicles.edit');
Route::put('/vehicles/{id}',[VehicleStandController::class,'update'])->name('vehicles.update');


// manageTrucks
Route::get('/vehicles/manage/buses', [VehicleStandController::class,'manageBuses'])->name('vehicles.buses');
// manageBuses
Route::get('/vehicles/manage/trucks', [VehicleStandController::class,'manageTrucks'])->name('vehicles.trucks');
// generating pdf
Route::get('/vehicles/{id}/print',[VehicleStandController::class,'generatingPDF'])->name('vehicles.print');