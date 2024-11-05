<?php

use App\Http\Controllers\HomeController;
use App\Http\Middleware\AgeCheck;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//http://127.0.0.1:8000/home/
Route::view('home', 'home')->middleware(AgeCheck::class);
//http://127.0.0.1:8000/about/
Route::view('about', 'about')->middleware(AgeCheck::class);
