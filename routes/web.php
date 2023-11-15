<?php

use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CategoryVideoController;
use App\Models\User;

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

Route::prefix('categories')->group(function(){

    Route::get('{category:slug}/videos', [CategoryVideoController::class, 'index'])->name('categories.videos.index');
});


Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/email',function(){

return new VerifyEmail();
});


