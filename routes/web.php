<?php

use App\Http\Controllers\iot_1;
use App\Http\Controllers\rest_api;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',function(){
    return view('supporter.main');
});

// Student Route =============================================================

Route::get('/student', [StudentController::class,'index']);
Route::get('/student/create',[StudentController::class,'create']);
Route::get('/student/{student}',[StudentController::class,'show']);
Route::post('/student', [StudentController::class,'store']);
Route::delete('/student/{student}', [StudentController::class,'destroy']);
Route::get('/student/{student}/edit', [StudentController::class,'edit']);
Route::patch('/student/{student}', [StudentController::class,'update']);

//=============================================================================


// IOT Route ================================================================

Route::get('/iot',[iot_1::class,'index']);

//=============================================================================

// Test Route ================================================================

Route::get('/update',[rest_api::class,'index']);


//=============================================================================

