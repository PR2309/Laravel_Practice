<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',  function () {
    return view('Hellow World!!!');
});


// Route::get('/withnamedata')