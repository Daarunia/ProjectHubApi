<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;

Route::get('/projects', 'App\Http\Controllers\Api\ProjectController@index');
Route::get('/project/{id}', [ProjectController::class, 'getProject']);

