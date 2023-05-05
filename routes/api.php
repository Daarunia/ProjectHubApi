<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/projects', 'App\Http\Controllers\Api\ProjectController@index');
