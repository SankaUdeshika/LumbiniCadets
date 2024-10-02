<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\RouteContorller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('signin');
});

Route::get('/signUp', [RouteContorller::class, 'GotoSignup'])->name('gotosignup');
