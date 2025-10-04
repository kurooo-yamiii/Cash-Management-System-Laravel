<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Specific Group
Route::get('test/{name}', function ($name) {
    return "Test Lang " . $name;
});

// Group of Routes
Route::group(['prefix' => 'dashboard'], function(){
    Route::get('admindashboard', function(){
        return "admindashboard";
    });
});

Route::get('barchart', 'Dashboard@donutchart');