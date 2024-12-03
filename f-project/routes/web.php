<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstcontroller;   // router link
use App\Http\Controllers\printcontroller;   // router link
use App\Http\Controllers\usercontroller;   




// Route::any('/', [firstcontroller::class,"home"]);// index() function call
// Route::any('/second', [firstcontroller::class,"second"]);// second() function call

// Route::any('/', [printcontroller::class,"home"]);// index() function call
// Route::get('/second', [printcontroller::class,"second"]);// second() function call


// ---> user(insert,update,delete,select)
Route::any('/',[usercontroller::class,"index"]);
Route::get('/delete/{id}',[usercontroller::class,"Delete"]);
Route::get('/update/{id}',[usercontroller::class,"getData"]);
Route::post('/update/{id}',[usercontroller::class,"updateData"]);




?>