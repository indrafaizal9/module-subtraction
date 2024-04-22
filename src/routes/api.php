<?php

use Illuminate\Support\Facades\Route;
use Indra\ModuleSubtraction\Controllers\SubtractionController;

Route::get('/subtract', [SubtractionController::class, 'subtract']);

Route::get('/check', function () {
    return 'Module Subtraction is working!';
});

Route::get('/api/check', function () {
    return 'Module Subtraction is working!';
});
