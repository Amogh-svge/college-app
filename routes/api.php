<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\dummyApiController;

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


Route::apiResource('/videos', dummyApiController::class);
Route::get('/video/{id?}', [AllController::class, 'index']);
Route::get('/video/search/{search}', [AllController::class, 'search']);
Route::get('/video/category', [AllController::class, 'retrieveCategory']);


// Route::group(['middleware' => 'auth:sanctum'], function () {

// });

