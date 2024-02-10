<?php

use App\Http\Controllers\PembayarantiketController;
use App\Http\Controllers\ReservasiController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['admin'])->group(function () {
    Route::get('/reservasi', [ReservasiController::class, 'index'])->name('reservasi.index');
});

Route::get('/reservasi/create', [ReservasiController::class, 'create']);
Route::post('/reservasi', [ReservasiController::class, 'store'])->name('reservasi.store');

Route::get('/pembayaran-tiket/create', [PembayarantiketController::class, 'create']);
Route::post('/pembayaran-tiket', [PembayarantiketController::class, 'store'])->name('pembayaran-tiket.store');

