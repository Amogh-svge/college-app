<?php

use App\Http\Controllers\VideoApiController;
use App\Models\Video;
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



Route::get('/video/{id?}', [VideoApiController::class, 'index']); // ? = creates optional id
Route::post('/video', [VideoApiController::class, 'create']);
Route::delete('/video/{video}', [VideoApiController::class, 'delete']);
Route::put('/video/{video}', [VideoApiController::class, 'update']);


Route::get('/video/search/{search}', [VideoApiController::class, 'search']);
