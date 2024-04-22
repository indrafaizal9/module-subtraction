<?php

namespace Indra\ModuleSubtraction\Providers;

use Illuminate\Support\ServiceProvider;

final class ModuleSubtractionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}