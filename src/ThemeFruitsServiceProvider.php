<?php

namespace EcomdevTheme\ThemeFruits;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ThemeFruitsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (file_exists(__DIR__ . '/../routes/web.php')) {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'theme-fruits');
        
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../public' => public_path('themes/theme-fruits'),
            ], 'ecomdev-theme/theme-fruits');
        }
    }

    public function register()
    {
        
    }
}