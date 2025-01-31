<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

Route::get('/', [productController::class, 'index'])->name("products.index");
Route::get('/product/create', [productController::class, 'create'])->name("products.create");
Route::post('/procduct/store', [productController::class, 'store'])->name("products.store");
Route::get('/product/{id}/edit', [productController::class, 'edit'])->name("products.edit");
Route::post('/procduct/update', [productController::class, 'update'])->name("products.update");
Route::get('/product/{id}', [productController::class, 'show'])->name("products.show");
Route::post('/product/{id}/delete', [productController::class, 'delete'])->name("products.delete");
