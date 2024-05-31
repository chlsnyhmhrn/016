<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ListProdukController;
use App\Http\Controllers\ApiController;


Route::get('/listproduk', [ListProdukController::class, 'show']);
Route::post('/listproduk/action', [ListProdukController::class, 'simpan'])->name('produk.simpan');
Route::delete('/listproduk/{id}', [ListProdukController::class, 'delete'])->name('produk.delete');
route::get('api/produk', [ApiController::class, 'index']);
route::get('api/list', [ApiController::class, 'getProduct']);
