<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ListProdukController;

Route::get('/listproduk', [ListProdukController::class, 'show']);
Route::post('/listproduk/action', [ListProdukController::class, 'simpan'])->name('produk.simpan');
Route::delete('/listproduk/{id}', [ListProdukController::class, 'delete'])->name('produk.delete');