<?php

use App\Http\Controllers\FoodController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Get item
Route::get('/foods', [FoodController::class, 'index']);
//create item
Route::post('/foods', [FoodController::class, 'store']);
// show itme
Route::post('/foods/{food}', [FoodController::class, 'show']);
//update item
Route::put('/foods/{food}', [FoodController::class, 'update']);

//hard delete item
Route::delete('/foods/{food}', [FoodController::class, 'destroy']);

//restore soft delete
Route::patch('/foods/{id}/restore', [FoodController::class, 'restore']);

Route::delete('/foods/{id}/force', [FoodController::class, 'forceDelete']);

Route::get('/foods/search', [FoodController::class, 'search']);