<?php

namespace Piwko\GenerateMenu;

use Illuminate\Support\ServiceProvider;

class GenerateMenuServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Migrations' => database_path('/migrations'),
            __DIR__.'/Views' => resource_path('/views'),
            __DIR__.'/Models' => app_path('/'),
        ]);
    }
}