<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('websites.index');
});

Route::get('/team', function () {
    return view('websites.team');
});

Route::get('/contact', function () {
    return view('websites.contact');
});

Route::get('/hollywood', function () {
    return view('websites.contact');
});
