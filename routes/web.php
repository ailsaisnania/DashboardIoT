<?php

use App\Http\Controllers\ConfigController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('config');
});

Route::get('/visualization', function () {
    return view('visualization');
}); 

Route::get('/login', function () {
    return view('login');
}); 

Route::get('/register', function () {
    return view('register');
}); 

Route::get('/datapreview', function () {
    return view('datapreview');
}); 

Route::get('/visualization2', function () {
    return view('visualization2');
}); 

Route::get('/', [ConfigController::class, 'index']);
Route::post('/', [ConfigController::class, 'store']);
Route::get('/config', [ConfigController::class, 'index']);