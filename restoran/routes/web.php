<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;


Route::get('/',[userController::class,'index']);
Route::get('/about',[userController::class,'about']);