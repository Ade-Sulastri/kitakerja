<?php

use Illuminate\Support\Facades\Route;
use App\Models\categories;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/layanan', [LayananController::class, 'index']);

Route::get('/test-category', function () {
    return categories::all();
});
