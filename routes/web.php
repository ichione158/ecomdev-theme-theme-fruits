<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['web'])->group(function () {
    Route::get('/', function () {
        return Inertia::render('Public/Home', [
            'theme' => 'theme-fruits',
        ]);
    });
});