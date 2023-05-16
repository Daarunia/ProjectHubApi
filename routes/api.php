<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;

Route::get('/projects', [ProjectController::class,'index']);
Route::get('/project/{id}', [ProjectController::class, 'getProject']);
Route::put('/project/{id}', [ProjectController::class, 'update']);
Route::delete('/project/{id}', [ProjectController::class, 'destroy']);
Route::post('/projects', [ProjectController::class, 'store']);


