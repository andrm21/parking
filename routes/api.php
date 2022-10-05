<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\ParkingController;
use App\Http\Controllers\api\v1\VehicleController;
use App\Http\Controllers\api\v1\ParkingAController;
use App\Http\Controllers\api\v1\InvoiceController;

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
    Route::apiResource('v1/products', \App\Http\Controllers\Api\v1\ParkingController::class);
    Route::apiResource('v1/products', \App\Http\Controllers\Api\v1\VehicleController::class);
    Route::apiResource('v1/products', \App\Http\Controllers\Api\v1\ParkingAController::class);
    Route::apiResource('v1/products', \App\Http\Controllers\Api\v1\InvoiceController::class);
});

Route::post(
    '/v1/login',
    [
        App\Http\Controllers\api\v1\AuthController::class,
        'login'
    ]
    )->name('api.login');
