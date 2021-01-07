<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PersonalInfoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('person', PersonController::class);
Route::apiResource('personalInfo', PersonalInfoController::class);
Route::apiResource('sectors',\App\Http\Controllers\SectorsController ::class);
Route::apiResource('aboutTheBusiness',\App\Http\Controllers\AboutTheBusinessController ::class);
Route::apiResource('aboutTheBusiness/fulltimers',\App\Http\Controllers\FulltimerController ::class);
