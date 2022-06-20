<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/add', function () {
//     return view('register');
// });

Route::get('form',[RegController::class,'index']);
Route::get('/',[RegController::class,'index']);
Route::post('register',[RegController::class,'create']);
Route::get('list',[RegController::class,'show']);
Route::get('delete/{id}',[RegController::class,'delete']);

Route::get('edit/{id}',[RegController::class,'edit']);
Route::post('update',[RegController::class,'update']);

