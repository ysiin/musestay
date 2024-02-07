<?php

use App\Http\Controllers\api\ApiReservasiController;
use App\Http\Controllers\api\ReservasiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    
});

Route::post('reservasi/create', [ApiReservasiController::class, 'store']);    
Route::get('reservasi', [ApiReservasiController::class, 'index']);    
