<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo/{name}', function ($name) {
    return "halo, $name";
});

Route::get('products', function() {
    return 'List semua product';
});

Route::post('products', function() {
    return 'Simpen semua product';
});

Route::post('/products/{id}', function($id) {
    return 'Update product ID'.$id;
});



Route::prefix('/products')
    ->group(function () {
        Route::get('/index', function() {
            return 'list semua product';
        });
        Route::post('/store', function() {
            return 'list semua product';
        });
    });


    Route::get('users/{id}', function ($id) {
        
    });

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/product/{id}', [ProductController::class, 'show']);