<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Rota funcionando!';
});

Route::resource('departments', DepartmentController::class);
Route::resource('items', ItemController::class);
