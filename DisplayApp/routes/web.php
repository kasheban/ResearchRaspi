<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\BandwidthController;
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

Route::get('dashboard', [LoginController::class, 'dashboard']); 
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [LoginController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [LoginController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');
Route::get('/reports', [DeviceController::class, 'getDevices']); 
Route::get('/bandwidth', [BandwidthController::class, 'getStats']); 

Route::get('/', function () {
    return view('login');
});

Route::get('/nav', function () {
    return view('NavBar');
});

// Route::get('/report', function () {
//     return view('Reports');
// });

Route::get('/honeypot', function () {
    return view('Honeypot');
});

Route::get('/cctv', function () {
    return view('cctv');
});

Route::get('/dashboard', function () {
    return view('Dashboard');
});

// Route::get('/login', function () {
//     return view('login');
// });