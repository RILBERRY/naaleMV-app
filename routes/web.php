<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Jenssegers\Agent\Agent;


Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        $agent = new Agent();
        return view('pages.home', compact('agent'));
    });
    Route::get('/students', [StudentController::class, 'list'] );
});
