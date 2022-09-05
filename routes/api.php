<?php

use App\Http\Controllers\Api\Cake\CreateCakeController;
use App\Http\Controllers\Api\Cake\UpdateCakeController;
use App\Http\Controllers\Api\Cake\ShowCakeController;
use App\Http\Controllers\Api\Cake\ListCakeController;
use App\Http\Controllers\Api\Cake\DeleteCakeController;
use App\Http\Controllers\Api\Request\CreateRequestController;
use App\Http\Controllers\Api\Request\ListRequestController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/cake', CreateCakeController::class);
Route::patch('/cake/{id}', UpdateCakeController::class);
Route::get('/cake/{id}', ShowCakeController::class);
Route::get('/cake', ListCakeController::class);
Route::delete('/cake/{id}', DeleteCakeController::class);

Route::post('/request-cake', CreateRequestController::class);
Route::get('/request-cake', ListRequestController::class);
