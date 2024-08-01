<?php

use App\Http\Controllers\CompetitionStudentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminApproveCompleted;
use App\Http\Middleware\AdminApproved;
use Illuminate\Support\Facades\Route;
use Jenssegers\Agent\Agent;

Route::get('/waiting-admin-approve', function (){
    return view('admin-approve');
})->middleware(['auth',AdminApproveCompleted::class]);

Route::middleware(['auth', AdminApproved::class])->group(function () {
    Route::get('/', function () {
        $agent = new Agent();
        return view('pages.home', compact('agent'));
    });
    Route::get('/students', [StudentController::class, 'list'] );
    Route::get('/competition-lists', [StudentController::class, 'competitionList'] );
    Route::get('/competition/{id}/add', [StudentController::class, 'generateList'] )->name('generate-list');
    Route::get('/users', [UserController::class, 'list'] )->name('user-list');
    Route::get('/user/{id}/approve', [UserController::class, 'approve'] );
    Route::get('/user/{id}/revoke', [UserController::class, 'revoke'] );
    Route::get('/competition/{id}/remove/{studentId}', [CompetitionStudentController::class, 'remove'] );
    Route::get('/competition/{id}/export', [CompetitionStudentController::class, 'export'] );
});
