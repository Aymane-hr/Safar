<?php

use App\Http\Controllers\AutoCarController;
use App\Http\Controllers\SocieteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('AutoCars', AutoCarController::class);
Route::resource('Societes', SocieteController::class);
