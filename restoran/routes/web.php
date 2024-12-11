<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;


Route::get('/',[userController::class,'index']);
Route::get('/about',[userController::class,'about']);
Route::get('/service',[userController::class,'service']);
Route::get('/menu',[userController::class,'menu']);
Route::get('/team',[userController::class,'team']);
Route::get('/booking',[userController::class,'booking']);
Route::get('/testimonial',[userController::class,'testimonial']);
Route::get('/contact',[userController::class,'contact']);