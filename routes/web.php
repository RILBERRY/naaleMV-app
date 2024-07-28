<?php

use Illuminate\Support\Facades\Route;
use Jenssegers\Agent\Agent;


Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    $agent = new Agent();
    return view('pages.home', compact('agent'));
});

Route::get('/categories', function () {
    $agent = new Agent();
    return view('pages.categories', compact('agent'));
});
Route::get('/trips', function () {
    $agent = new Agent();
    return view('pages.trips', compact('agent'));
});
