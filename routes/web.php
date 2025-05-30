<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/category' , [CategoryController::class , 'getIndex']);
    Route::get('/category/show/{id}' , [CategoryController::class , 'getShow']);
    Route::put('/category/edit/{id}', [CategoryController::class, 'getEdit'])->name('category.edit');
    Route::get('/category/create', [CategoryController::class, 'getCreate']);
    Route::post('/category/create/', [CategoryController::class, 'storePost']);
    Route::delete('/category/delete/{id}', [CategoryController::class, 'deletePost']);
});

require __DIR__.'/auth.php';
