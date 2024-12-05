<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userlogin;

Route::any('/', [userlogin::class, 'login']);
Route::any('/register', [userlogin::class, 'newUserRegister']);
Route::any('/dashboard', [userlogin::class, 'dashboard']);
Route::any('/addContact', [userlogin::class, 'addcontact']);
Route::any('/viewContact', [userlogin::class, 'viewcontact']);

Route::get('/updateContact/{id}',[userlogin::class,'getUpdateData']);
Route::post('/updateContact/{id}',[userlogin::class,'updateContact']);

Route::get('/delete/{id}',[userlogin::class,'deleteContact']);

Route::any('/manageAccount',[userlogin::class,'viewAccount']);

Route::get('/updateAccount/{id}',[userlogin::class,'getAccountData']);
Route::post('/updateAccount/{id}',[userlogin::class,'updateAccount']);

Route::get('/logout',[userlogin::class,'logout']);
