<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\adminController;


Route::get('/', function () {
    return view('welcome');
});


//user side
Route::get('/', [usercontroller::class, 'index']);
Route::get('/services', [usercontroller::class, 'services']);
Route::get('/clients', [usercontroller::class, 'clients']);
Route::get('/blog-grid', [usercontroller::class, 'blogGrid']);
Route::get('/blog-single', [usercontroller::class, 'blogSingle']);
Route::get('/about', [usercontroller::class, 'about']);
Route::get('/three-column', [usercontroller::class, 'threeColumn']);
Route::get('/four-column', [usercontroller::class, 'fourColumn']);
Route::get('/single-project', [usercontroller::class, 'singleProject']);
Route::get('/contact', [usercontroller::class, 'contact']);

//admin side
Route::get('admin/',[adminController::class,'index']);
