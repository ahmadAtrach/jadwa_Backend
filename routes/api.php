<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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
Route::apiResource('personalInfo', \App\Http\Controllers\PersonalInfoController::class);
Route::apiResource('sectors',\App\Http\Controllers\SectorsController ::class);
Route::apiResource('aboutTheBusiness',\App\Http\Controllers\AboutTheBusinessController ::class);
Route::apiResource('aboutTheBusiness/fulltimers',\App\Http\Controllers\FulltimerController ::class);
Route::apiResource('aboutTheBusiness/listOfEquipments',\App\Http\Controllers\ListofEquipmentController ::class);
Route::apiResource('incomes',\App\Http\Controllers\IncomeController ::class);
Route::apiResource('premises',\App\Http\Controllers\AboutThePremisesController ::class);
Route::apiResource('productivity',\App\Http\Controllers\ProductivityController ::class);
Route::apiResource('seasons',\App\Http\Controllers\SeasonsController ::class);
Route::apiResource('salesForecasts',\App\Http\Controllers\SalesForecastController ::class);
Route::apiResource('newProjects',\App\Http\Controllers\NewProjectController ::class);
Route::apiResource('marketAnalysis',\App\Http\Controllers\MarketAnalysisController ::class);


