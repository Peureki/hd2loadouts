<?php

use App\Http\Controllers\FetchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/fetch-spreadsheet-data', [FetchController::class, 'fetchSpreadsheetData']);
