<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 

Route::get('/user/register', [UserController::class, 'register'])->name('user.register'); 
Route::post('/user/save', [UserController::class,'save'])->name('user.save');
