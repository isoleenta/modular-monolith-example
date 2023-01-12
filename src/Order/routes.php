<?php

use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/my', [\Monolith\Order\Application\Http\Controllers\OrderController::class, 'getMyOrders']);
});

Route::get('/test', function () {
    return 'test';
});
