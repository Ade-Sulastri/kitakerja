<?php

use Illuminate\Support\Facades\Route;
use App\Models\categories;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-category' , function(){
    return categories::all();
});
