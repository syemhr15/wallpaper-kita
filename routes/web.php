<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WallpaperController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () { 
    return view('index'); 
})->name('index');


Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::post('/koleksi', [WallpaperController::class, 'store']); 
    Route::get('/koleksi', [WallpaperController::class, 'index'])->name('koleksi');
    Route::delete('/koleksi/{id}', [WallpaperController::class, 'destroy']);
    
    
    Route::get('/home', function() {
        return redirect('/');
    });
});