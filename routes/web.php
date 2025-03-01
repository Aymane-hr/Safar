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

Route::resource('autoCars', AutoCarController::class);
Route::resource('societes', SocieteController::class);
