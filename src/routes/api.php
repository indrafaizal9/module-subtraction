// src/routes/web.php
<?php

use Illuminate\Support\Facades\Route;
use Vendor\ModuleSubtraction\Controllers\SubtractionController;

Route::post('/subtract', [SubtractionController::class, 'subtract']);
