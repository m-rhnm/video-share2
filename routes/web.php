<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideoController;
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

Route::prefix('videos')->group(function(){
    Route::get('/',[VideoController::class,'index'])->name('index');
    Route::get('create',[VideoController::class,'create'])->name('videos.create');
    Route::post('',[VideoController::class,'store'])->name('videos.store');
    Route::get('{video}',[VideoController::class,'show'])->name('videos.show');
    Route::get('{video}/edit',[VideoController::class,'edit'])->name('videos.edit');
    Route::post('{video}',[VideoController::class,'update'])->name('videos.update');
});

