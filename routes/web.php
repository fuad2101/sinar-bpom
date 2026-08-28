<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Laravel\Fortify\Fortify;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function(){
    return view('pages.dashboard.index');
})->name('dashboard');
