<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book/{id}', function ($id) {
    $book = [
        0 => ['title' => 'Laravel Handbook', 'author' => 'Raman Singh', 'price' => 'Rs 100', 'description' => 'A novel set in the 1920s'],
        1 => ['title' => 'Laravel Basics', 'author' => 'John Doe', 'price' => '$20', 'description' => 'Introduction to Laravel'],
        2 => ['title' => 'Advanced PHP', 'author' => 'Jane Doe', 'price' => '$30', 'description' => 'Deep dive into PHP programming'],
    ];

    return view('books')->with('book', $book[$id] ?? null);
});