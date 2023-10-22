<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/',[UserController::class,'index'])->name('index');
Route::post('/',[UserController::class,'create'])->name('create');
Route::get('/editform/{id}',[UserController::class,'edit'])->name('edit');
Route::put('/editform/{id}',[UserController::class,'update'])->name('update');
Route::get('/editform/{id}',[UserController::class,'destroy'])->name('destroy');