<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\RouteContorller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('signup');
});

Route::get('/signin', function () {
    return view('signup');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/signUp', [RouteContorller::class, 'GotoSignup'])->name('gotosignup');
Route::get('/signIn', [RouteContorller::class, 'GotoSignin'])->name('gotosignin');
