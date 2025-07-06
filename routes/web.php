<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['web'])->group(function () {
    // Route::get('/', function () {
    //     return Inertia::render('Public/Home', [
    //         'theme' => 'theme-fruits',
    //         'title' => 'Trang chủ',
    //     ]);
    // });

    // Route::get('/about', function () {
    //     return Inertia::render('Public/About', [
    //         'theme' => 'theme-fruits',
    //         'title' => 'Giới thiệu',
    //     ]);
    // });
});