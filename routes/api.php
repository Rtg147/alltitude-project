<?php

use App\Http\Controllers\UserController;

Route::get('usersList', [UserController::class,'getUserList']); // Action syntay since laravel v8

/**
*
*	This Inserts in our database the new user 
*
*/
Route::post('newUser', [UserController::class,'add']);
