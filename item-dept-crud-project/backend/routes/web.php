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

Route::get('/api/test', function () {
    return response()->json(['mensagem' => 'Rota de API funcionando']);
});

Route::prefix('api')->group(function () {
    Route::resource('departments', DepartmentController::class);
    Route::resource('items', ItemController::class);
});