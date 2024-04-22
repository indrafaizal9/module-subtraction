<?php

use Illuminate\Support\Facades\Route;
use Indra\ModuleSubtraction\Controllers\SubtractionController;

Route::middleware('api')->prefix('apis')->group(function () {
    Route::get('/subtraction', [SubtractionController::class, 'index']);
});