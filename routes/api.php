<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegistrationOriginController;
use App\Http\Controllers\Api\RevenueTypesController;
use App\Http\Controllers\Api\ExpenseTypeController;
use App\Http\Controllers\Api\StatusController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\RevenueController;
use App\Http\Controllers\Api\ExpenseController;
use App\Http\Controllers\Api\PeopleController;
use App\Http\Controllers\Api\UserController;

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

Route::apiResource('origins', RegistrationOriginController::class);
Route::apiResource('revenues-types', RevenueTypesController::class);
Route::apiResource('expenses-types', ExpenseTypeController::class);
Route::apiResource('statuses', StatusController::class);
Route::apiResource('payments', PaymentController::class);
Route::apiResource('revenues', RevenueController::class);
Route::apiResource('expenses', ExpenseController::class);
Route::apiResource('peoples', PeopleController::class);
Route::apiResource('users', UserController::class);
