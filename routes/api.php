<?php

use App\Http\Controllers\QuoteController;
use App\Http\Middleware\EnvironmentCheckMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware([EnvironmentCheckMiddleware::class])->group(function () {
    // Rota 1: Cotação fictícia com a API da Frete Rápido
    Route::post('/quote', [QuoteController::class, 'quote']);

    // Rota 2: Consultar métricas das cotações armazenadas
    Route::get('/metrics/{metric?}', [QuoteController::class, 'metrics']);
});

