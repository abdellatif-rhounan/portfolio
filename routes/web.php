<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//--- Web Routes ---

Route::get('/', function () {
    return Inertia::render('App');
});
