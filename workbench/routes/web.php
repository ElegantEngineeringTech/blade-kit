<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('demo', [
        'styles' => __DIR__.'/../../resources/css/styles.css',
    ]);
});
