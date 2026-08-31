<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Laravel\Fortify\Fortify;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function(){
//     return view('pages.dashboard.index');
// })->middleware(['verified'])->name('dashboard');

Route::middleware(['verified'])->group(function(){

    Route::get('/dashboard', function(){
        return view('pages.dashboard.index');
    })->name('dashboard');

    Route::get('/table', function(){
        return view('pages.dashboard.tables');
    })->name('table');


});

Route::get('/email/verify', function () {
    return view('pages.auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('status', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
