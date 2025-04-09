<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/about', function () {
    return Inertia::render('About', [
        'name' => 'John Doe',
        'age' => 30,
        'location' => 'New York',
        'is_admin' => true
    ]);
});
