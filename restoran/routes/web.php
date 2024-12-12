<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;


//User Side
Route::get('/',[userController::class,'index']);
Route::get('/about',[userController::class,'about']);
Route::get('/service',[userController::class,'service']);
Route::get('/menu',[userController::class,'menu']);
Route::get('/team',[userController::class,'team']);
Route::get('/booking',[userController::class,'booking']);
Route::get('/testimonial',[userController::class,'testimonial']);
Route::get('/contact',[userController::class,'contact']);

//Admin Side
Route::any('/admin',[adminController::class,'index']);
Route::any('/dashboard',[adminController::class,'dashboard']);


Route::get('/logout',[adminController::class,'logout']);
