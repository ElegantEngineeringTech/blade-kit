<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blade');
});

Route::get('/vue', function () {
    return view('vue');
});
