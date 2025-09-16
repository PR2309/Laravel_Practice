<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return 'Hello World';
});

// Route::get("admin/student/data",function(){
//     return view("view1");
// })->name("data");

// Route::get("admin/student/course",function(){
//     return view("view2");
// })->name("course");


/* Classes */
// Route::get('index',function(){
//     return view('home');
// });

// Sessions

// Route::get('data',[DataController::class,"index"]);
// Route::post('data',[DataController::class,"data"]);
use App\Http\Controllers\SessionController;
Route::get('set',[SessionController::class,"setSession"]);
Route::get('get',[SessionController::class,"getSession"]);
Route::delete('delete',[SessionController::class,"deleteSession"]);

// Forms

Route::get('form',function(){
    return view('/pages/form');
});

// Mail
use App\Http\Controllers\EmailController;
Route::get("sendemail",[EmailController::class,"sendemail"]);