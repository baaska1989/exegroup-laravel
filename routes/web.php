<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('application');
//});

Route::get('{any}', function () {
    return view('application');
})->where('any','.*');
