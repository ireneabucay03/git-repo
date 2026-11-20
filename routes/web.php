<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/irene', function () {
    return response()->json(['version' => '1.0.0']);
});
