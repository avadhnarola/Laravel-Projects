<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;


Route::any('/', [usercontroller::class, 'index']);
Route::any('/dashboard',[usercontroller::class,'dashboard']);
Route::get('/logout',[usercontroller::class,'logout']);