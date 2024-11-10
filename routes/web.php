<?php

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