<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ItemController;

Route::middleware('api')->group(function () {
    Route::apiResource('departments', DepartmentController::class);
    Route::apiResource('items', ItemController::class);
});

