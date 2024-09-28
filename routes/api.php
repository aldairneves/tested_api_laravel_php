<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ChavesController;
use App\Http\Controllers\Api\SenhasController;
use App\Http\Controllers\Api\ArquivosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('posts', PostController::class)->except([
    'create', 'show', 'edit'
]);

Route::apiResource('chaves', ChavesController::class)->except([
    'create', 'show', 'edit'
]);

Route::apiResource('senhas', SenhasController::class)->except([
    'create', 'show', 'edit'
]);

Route::apiResource('arquivos', ArquivosController::class)->except([
    'create', 'show', 'edit'
]);