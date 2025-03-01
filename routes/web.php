<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin.Layout.app');
});
Route::get('/', function () {
    return view('client.Layout.app');
});
