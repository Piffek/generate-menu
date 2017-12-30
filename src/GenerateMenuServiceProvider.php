<?php

namespace Piwko\GenerateMenu;

use Illuminate\Support\ServiceProvider;

class GenerateMenuServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ .'/Migrations' => resource_path('app/database/migrations'),
        ]);
    }
}