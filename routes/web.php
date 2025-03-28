<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [LoginController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');
