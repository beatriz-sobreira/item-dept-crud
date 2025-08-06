<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Rota funcionando!';
});

Route::get('/api/test', function () {
    return response()->json(['mensagem' => 'Rota de API funcionando']);
});