<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\InformationController;

//--- Web Routes ---

Route::get('/', function () {
    return Inertia::render('App');
});

Route::resource('filters', FilterController::class);

Route::resource('projects', ProjectController::class);

Route::resource('informations', InformationController::class);
