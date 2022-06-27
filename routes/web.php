<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;



Route::get('/', function () {
    return view('welcome');
});
// Route::get('/add', function () {
//     return view('register');
// });
// Route::get('new',[RegController::class,'index']);
// Route::get('add',[RegController::class,'show']);
Route::get('new',[RegController::class,'index']);
Route::post('register',[RegController::class,'create']);
Route::get('list',[RegController::class,'show']);
Route::get('delete/{id}',[RegController::class,'delete']);
Route::get('edit/{id}',[RegController::class,'edit']);
Route::post('update',[RegController::class,'update']);

// Route::get('one',[CustomerController::class,'create']);
Route::get('many',[CustomerController::class,'store']);
Route::get('all',[CustomerController::class,'show']);
Route::get('for',[RoleController::class,'index']);


Route::get('view', function () {
    return view('form');
});
Route::post('reg',[StudentController::class,'insert']);