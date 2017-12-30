<?php

namespace Piwko\GenerateMenu;

use Illuminate\Support\ServiceProvider;

class GenerateMenuServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/Migrations');
    }
}