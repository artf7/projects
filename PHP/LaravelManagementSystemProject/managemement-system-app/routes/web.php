<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Routes for Categories
Route::get('/categories/create', [CategoryController::class, 'createForm']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}/edit', [CategoryController::class, 'editForm']);
Route::patch('/categories/{id}', [CategoryController::class, 'update']);

// Routes for Items
Route::get('/items/create', [ItemController::class, 'createForm']);
Route::post('/items', [ItemController::class, 'store']);
Route::get('/items', [ItemController::class, 'index']);
Route::get('/items/{id}/edit', [ItemController::class, 'editForm']);
Route::patch('/items/{id}', [ItemController::class, 'update']);
Route::get('/items/{id}/delete', [ItemController::class, 'deleteConfirmation']);
Route::delete('/items/{id}', [ItemController::class, 'destroy']);

// Example route
Route::get('/example', function () {
    return 'This is an example route.';
});
