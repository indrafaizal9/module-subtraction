// src/routes/web.php
<?php

use Illuminate\Support\Facades\Route;
use Indra\ModuleSubtraction\Controllers\SubtractionController;


Route::get('/subtract', [SubtractionController::class, 'subtract']);
