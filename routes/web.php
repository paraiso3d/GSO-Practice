<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserlistController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/user', [UserlistController::class, 'index'])->name ('users.index'); 
    Route::get('/user/create', [UserlistController::class, 'create'])->name ('user.create'); 
    Route::post('/users', [UserlistController::class, 'store'])->name ('user.store'); 
    Route::get('/user/{user}/edit', [UserlistController::class, 'edit'])->name ('user.edit'); 
    Route::put('/user/{user}/update', [UserlistController::class, 'update'])->name ('user.update'); 
    Route::delete('/user/{user}/delete', [UserlistController::class, 'delete'])->name ('user.delete'); 
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
