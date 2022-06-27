<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostmanController;
use App\Http\Controllers\UserController;
use Laravel\Sanctum\Sanctum;

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
Route::get('start',[PostmanController::class,'index']);
// Route::get('all',[CustomerController::class,'show']);
// Route::get('one',[CustomerController::class,'create']);
Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::get('/detail',[UserController::class,'detail'])->middleware('auth:sanctum');

// Route::post('/login',[PostmanController::class,'login']);
