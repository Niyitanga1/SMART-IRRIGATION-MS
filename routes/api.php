<?php

use App\Http\Controllers\AgronomistController;
use App\Http\Controllers\CooperativesController;
use App\Http\Controllers\DevicesController;
use App\Http\Controllers\IrrigationController;
use App\Http\Controllers\ManagersController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('cooperatives',[CooperativesController::class,'store']);

Route::delete('cooperatives/{id}',[CooperativesController::class,'delete']);
Route::get('cooperatives',[CooperativesController::class,'viewall']);
//Route::put('cooperatives/{id}',[CooperativesController::class,'update']);
Route::put('cooperatives/{id}',[CooperativesController::class,'update']);

//managers routes

Route::post('managers',[ManagersController::class,'store']);
Route::delete('managers/{id}',[ManagersController::class,'delete']);
Route::get('managers',[ManagersController::class,'viewall']);
Route::put('managers/{id}',[ManagersController::class,'update']);
//devices routes
Route::post('devices',[DevicesController::class,'store']);
Route::delete('devices/{id}',[DevicesController::class,'delete']);
Route::put('devices/{id}',[DevicesController::class,'update']);
Route::get('devices',[DevicesController::class,'viewall']);

//Agronomist routes
Route::post('agronomist',[AgronomistController::class,'store']);
Route::delete('agronomist/{id}',[AgronomistController::class,'delete']);
Route::get('agronomist',[AgronomistController::class,'viewall']);
Route::put('agronomist/{id}',[AgronomistController::class,'update']);

//Irrigation   routes
Route::post('irrigation',[IrrigationController::class,'store']);
Route::delete('irrigation/{id}',[IrrigationController::class,'delete']);
Route::get('irrigation',[IrrigationController::class,'viewall']);
Route::put('irrigation/{id}',[IrrigationController::class,'update']);


