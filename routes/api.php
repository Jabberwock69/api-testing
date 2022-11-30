<?php

use App\Http\Controllers\Coba;
use App\Http\Controllers\CobaController;
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

Route::get('api11', [CobaController::class, 'api11']);
Route::get('api12', [CobaController::class, 'api12']);
Route::get('api2', [CobaController::class, 'countPasien']);
Route::get('api3', [CobaController::class, 'datePasien']);
Route::get('api4', [CobaController::class, 'noPasien']);
