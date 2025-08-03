<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ItemController;

Route::apiResource('departments', DepartmentController::class);
Route::apiResource('items', ItemController::class);
