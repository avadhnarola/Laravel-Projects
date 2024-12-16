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
Route::any('/addService',[adminController::class,'addService']);
Route::any('/viewService',[adminController::class,'viewService']);
Route::any('/addFood',[adminController::class,'addFood']);
Route::any('/viewFood',[adminController::class,'viewFood']);


Route::get('/delete/{id}',[adminController::class,'delete']);
Route::get('/deleteFood/{id}',[adminController::class,'deleteFood']);
Route::get('/updateService/{id}',[adminController::class,'getServiceData']);
Route::post('/updateService/{id}',[adminController::class,'updateService']);
Route::get('logout',[adminController::class,'logout']);
