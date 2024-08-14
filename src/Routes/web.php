<?php

use Illuminate\Support\Facades\Route;
use Uasoft\Badaso\Theme\LandyTheme\Controllers\HomeController;



$landy_route_prefix = config('badaso-landy-theme.landy_theme_prefix');

Route::prefix($landy_route_prefix)
    ->as('badaso.landy-theme.')
    ->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    });

