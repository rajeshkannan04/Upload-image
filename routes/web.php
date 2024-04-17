<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imageController;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('sign-in');
});
Route::get('/signup',function(){
    return view('sign-up');
});
Route::get('/dashboard',function(){
    return view('dashboard');
});
Route::post('/signup', [userController::class, 'store']);
Route::post('/signin', [userController::class, 'show']);
Route::get('/logout', [userController::class, 'logout']);

// Route::post('/save', [imageController::class, 'store']);
// Route::get('/show', [imageController::class, 'index']);
// Route::get('/delete/{id}',[imageController::class, 'destroy']);
// Route::get('/update/{id}', [imageController::class, 'edit']);
// Route::post('/edited/{id}', [imageController::class, 'update']);