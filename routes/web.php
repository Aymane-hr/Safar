<?php

use App\Http\Controllers\AutoCarController;
use App\Http\Controllers\SocieteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('autoCars', AutoCarController::class);
Route::resource('societes', SocieteController::class);
