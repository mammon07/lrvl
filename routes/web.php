<?php

use illuminate\Support\facades\Route;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\AkunController;


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

Route::get('/home', function () {
    return view('tes', 
    [
        'title' => 'Home'
    ]);
});


Route::get('/sewa', [TokoController::class, 'index']);


Route::get('/tutorial', function () {
    return view('tutorial', 
    [
        'title' => 'Tata Cara'
    ]);
});

Route::get('/faq', function () {
    return view('faq', 
    [
        'title' => 'FAQ'
    ]);
});

Route::get('/contoh', function () {
    return view('welcome');
});


Route::get('/login', [AkunController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AkunController::class, 'login']);
Route::post('/logout', [AkunController::class, 'logout'])->name('logout');
Route::middleware(['auth'])->group(function () {
    // Rute yang memerlukan autentikasi
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // ... Rute lainnya
});
