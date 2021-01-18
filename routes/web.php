<?php

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

Route::get('/', [\App\Http\Controllers\StarController::class,'home']);

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [\App\Http\Controllers\StarController::class,'dashboard'])->name('dashboard');
    Route::get('/create', [\App\Http\Controllers\StarController::class,'create'])->name('createStar');
    Route::post('/store', [\App\Http\Controllers\StarController::class,'storeStar'])->name('storeStar');
    Route::put('/update/{star}', [\App\Http\Controllers\StarController::class,'updateStar'])->name('updateStar');

    Route::get('/edit/{star}', [\App\Http\Controllers\StarController::class,'editStar'])->name('editStar');
    Route::get('/delete/{star}', [\App\Http\Controllers\StarController::class,'deleteStar'])->name('deleteStar');

});


require __DIR__.'/auth.php';
