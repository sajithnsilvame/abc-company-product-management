<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');

    Route::get('/create-category', [PagesController::class, 'go_to_create_category_page']);

    Route::post('/save-category', [CategoryController::class, 'store']);

    Route::get('/create-product', [PagesController::class, 'go_to_create_product_page']);

    Route::post('/save-product', [ProductController::class, 'store']);

    Route::get('/edit-product/{id}', [ProductController::class, 'edit']);

    Route::post('/update-product/{id}', [ProductController::class, 'update']);

    Route::get('/delete-product/{id}', [ProductController::class, 'delete']);

});




