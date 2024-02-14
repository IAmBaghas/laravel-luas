<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersegiController;
use App\Http\Controllers\PersegiPanjangController;
use App\Http\Controllers\LingkaranController;
use App\Http\Controllers\SegitigaController;
use App\Http\Controllers\RectangleController;
use App\Http\Controllers\RectangleJumpController;
use App\Http\Controllers\RectangleTembakController;
use App\Http\Controllers\RectangleMoveController;

// use App\Http\Controllers\LuasSegitigaController;

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

Route::get('/hitung-persegi', [PersegiController::class, 'index']);
Route::post('/hitung-persegi', [PersegiController::class, 'hitung']);

Route::get('/hitung-persegi-panjang', [PersegiPanjangController::class, 'index']);
Route::post('/hitung-persegi-panjang', [PersegiPanjangController::class, 'hitung']);

Route::get('/hitung-lingkaran', [LingkaranController::class, 'index']);
Route::post('/hitung-lingkaran', [LingkaranController::class, 'hitung']);

Route::get('/hitung-segitiga', [SegitigaController::class, 'index']);
Route::post('/hitung-segitiga', [SegitigaController::class, 'hitung']);

Route::get('/rectangle', [RectangleController::class, 'index']);

Route::get('/rectangle-jump', [RectangleJumpController::class, 'index']);

Route::get('/rectangle-tembak', [RectangleTembakController::class, 'index']);

Route::get('/rectangle-move', [RectangleMoveController::class, 'index']);
