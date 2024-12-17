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


//Service
Route::any('/addService',[adminController::class,'addService']);
Route::any('/viewService',[adminController::class,'viewService']);
Route::get('/updateService/{id}',[adminController::class,'getServiceData']);
Route::post('/updateService/{id}',[adminController::class,'updateService']);
Route::get('/deleteService/{id}',[adminController::class,'deleteService']);

//Food
Route::any('/addFood',[adminController::class,'addFood']);
Route::any('/viewFood',[adminController::class,'viewFood']);
Route::get('/updateFood/{id}',[adminController::class,'getFoodData']);
Route::post('/updateFood/{id}',[adminController::class,'updateFood']);
Route::get('/deleteFood/{id}',[adminController::class,'deleteFood']);

//Team OR Cheaf
Route::any('/addTeam',[adminController::class,'addTeam']);
Route::any('/viewTeam',[adminController::class,'viewTeam']);
Route::get('/updateTeam/{id}',[adminController::class,'getTeamData']);
Route::post('/updateTeam/{id}',[adminController::class,'updateTeam']);
Route::get('/deleteTeam/{id}',[adminController::class,'deleteTeam']);


Route::get('logout',[adminController::class,'logout']);
