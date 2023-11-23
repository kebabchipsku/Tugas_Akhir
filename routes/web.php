<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

Route::get('/', [BukuController::class, 'index']);

Route::get('/buku/{id_buku}', [BukuController::class, 'show']);

Route::post('/', [BukuController::class, 'store']);

Route::get('create', [BukuController::class, 'create']);

Route::get('/{id_buku}/edit', [BukuController::class, 'edit']);

Route::put('/buku/{id_buku}', [BukuController::class, 'update']);

Route::delete('/{id_buku}', [BukuController::class, 'destroy'])->name('buku.destroy');
