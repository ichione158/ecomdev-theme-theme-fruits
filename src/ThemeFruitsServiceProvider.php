<?php

namespace EcomdevTheme\ThemeFruits;

use Illuminate\Support\ServiceProvider;

class ThemeFruitsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (file_exists(__DIR__ . '/../routes/web.php')) {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        }

        if ($this->app->runningInConsole()) {
            $this->publishes([
                // __DIR__.'/../resources/js' => resource_path('js/vendor/theme-fruits'),
            ], 'theme-fruits');
        }
    }

    public function register()
    {
        
    }
}