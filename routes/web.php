<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\JenisKamarController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PembayarantiketController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ReservasiHotelController;
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
    Route::get('/reservasi-hotel', [ReservasiHotelController::class, 'index'])->name('reservasi-hotel.index');
    
    Route::get('/pembayaran-tiket', [PembayarantiketController::class, 'index'])->name('pembayaran-tiket.index');
    Route::PUT('/pembayaran-tiket/status/{id}', [PembayarantiketController::class, 'updateStatus'])->name('updateStatus');


    Route::get('/hotel', [HotelController::class, 'index'])->name('hotel.index');
    Route::get('/hotel/create', [HotelController::class, 'create'])->name('hotel.create');
    Route::post('/hotel/store', [HotelController::class, 'store'])->name('hotel.store');

    Route::get('/jenis-kamar', [JenisKamarController::class, 'index'])->name('jeniskamar.index');
    Route::get('/jenis-kamar/create', [JenisKamarController::class, 'create'])->name('jeniskamar.create');
    Route::post('/jenis-kamar/store', [JenisKamarController::class, 'store'])->name('jeniskamar.store');

    Route::get('/kamar', [KamarController::class, 'index'])->name('kamar.index');
    Route::get('/kamar/create', [KamarController::class, 'create'])->name('kamar.create');
    Route::post('/kamar/store', [KamarController::class, 'store'])->name('kamar.store');
});


Route::get('/reservasi/create', [ReservasiController::class, 'create']);
Route::post('/reservasi', [ReservasiController::class, 'store'])->name('reservasi.store');


Route::get('/reservasi-hotel/create', [ReservasiHotelController::class, 'create']);
Route::post('/reservasi-hotel', [ReservasiHotelController::class, 'store'])->name('reservasi-hotel.store');


Route::get('/pembayaran-tiket/menu', [PembayarantiketController::class, 'menu'])->name('pembayaran-tiket.menu');
Route::post('/pembayaran-tiket/store', [PembayarantiketController::class, 'store'])->name('pembayaran-tiket.store');
Route::get('/pembayaran-tiket/{id}', [PembayarantiketController::class, 'create'])->name('pembayaran-tiket.create');
