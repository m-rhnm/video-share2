<?php

use App\Models\User;
use App\Mail\VerifyEmail;
use App\Jobs\ProcessVideo;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\DisikeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryVideoController;

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
    Route::post('{video}/comment',[CommentController::class,'store'])->name('comments.store');
});

Route::prefix('categories')->group(function(){

    Route::get('{category:slug}/videos', [CategoryVideoController::class, 'index'])->name('categories.videos.index');
});

Route::get('{likeable_type}/{likeable_id}/like',[LikeController::class,'store'])->name('likes.store');
Route::get('{likeable_type}/{likeable_id}/dislike',[DisikeController::class,'store'])->name('dislikes.store');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/jobs',function(){

    ProcessVideo::dispatch();
});


