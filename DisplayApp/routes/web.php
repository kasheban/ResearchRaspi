<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nav', function () {
    return view('NavBar');
});

Route::get('/report', function () {
    return view('Reports');
});

Route::get('/honeypot', function () {
    return view('Honeypot');
});

Route::get('/cctv', function () {
    return view('cctv');
});

Route::get('/dashboard', function () {
    return view('Dashboard');
});

Route::get('/login', function () {
    return view('login');
});