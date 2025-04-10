<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return 'YOOOOO WASSSUPPPPP!';
});

Route::get('/greet', [App\Http\Controllers\GreetController::class, 'show']);
Route::get('/greet', [GreetController::class, 'index']);