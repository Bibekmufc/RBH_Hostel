<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class, 'welcome']) -> name('welcome');

Route::get('/about', function(){
    return view('about');
});

Route::get('/features', function(){
    return view('features');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/accommodation', function(){
    return view('accommodation');
});
