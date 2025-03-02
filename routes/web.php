<?php

use App\Http\Controllers\AutoCarController;
use App\Http\Controllers\SocieteController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin.Layout.app');
});
Route::get('/', function () {
    return view('client.Layout.app');
});

<<<<<<< HEAD
Route::resource('AutoCars', AutoCarController::class);
Route::resource('societes',SocieteController::class);
=======
Route::resource('autoCars', AutoCarController::class);
Route::resource('societes', SocieteController::class);
>>>>>>> ac7b5e3291a45ab80f1bddd4f8ffa301254c979c
