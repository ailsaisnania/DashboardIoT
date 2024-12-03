<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Auth\RegisterController;
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
Route::post('/register', [RegisterController::class, 'register']);

Route::post('/upload-csv', [ConfigController::class, 'uploadCSV']);



// Route::post('https://jsonplaceholder.typicode.com/posts', [ConfigController::class, 'store']);
// Route::delete('https://jsonplaceholder.typicode.com/posts/{id}', [ConfigController::class, 'delete']);

