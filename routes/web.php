<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userlist', [listController::class, 'index'])->name('UserLists.index');
Route::get('/userlist/create', [listController::class, 'create'])->name('UserLists.create');
Route::post('/userlists', [listController::class, 'store'])->name('UserLists.store');