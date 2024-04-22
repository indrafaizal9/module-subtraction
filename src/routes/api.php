// src/routes/web.php
<?php

use Illuminate\Support\Facades\Route;
use Indra\ModuleSubtraction\Http\Controllers\SubtractionController;


Route::get('/subtract', [SubtractionController::class, 'subtract']);
