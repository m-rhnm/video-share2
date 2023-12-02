<?php

use App\Http\Controllers\Api\v1\AuthController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\v1\VideoController;

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

Route::prefix('v1')->group(function(){
    Route::GET('videos',[VideoController::class,'index'])->name('index');
    Route::GET('videos/{video:slug}',[VideoController::class,'show']);
    Route::POST('videos',[VideoController::class,'store'])->name('videos.store')->middleware('auth:sanctum');
    Route::PUT('videos/{video:slug}',[VideoController::class,'update'])->middleware('auth:sanctum');
    Route::DELETE('videos/{video:slug}',[VideoController::class,'destroy'])->middleware('auth:sanctum');
    Route::get('auth/me',[AuthController::class,'me'])->middleware('auth:sanctum');
    Route::get('auth/logout',[AuthController::class,'logout'])->middleware('auth:sanctum');
});

Route::post('v1/auth/login', [AuthController::class ,'login']);
