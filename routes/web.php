<?php

use App\Models\Post;

use Illuminate\Support\Facades\Route;

/*
*
*	Here's our route for the application as we will have a REST app we will not play with the laravel router *   that much and if our alltitude app has to evolve we'll use the vue router with our api middleware
*
*/

Route::get('/{any}', function () {
    return view('app');
})->where('any','.*');

/**
*	
*
*
*
*/
// Route::get('/{post}', function ($slug) {	

// 	return view('test',[
// 		'post' => Post::find($slug)
// 	]);
// })->where('userName','[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.\'-]{2,45}');

// Route::post("/add-user", function($usr){
// 	return $return->userName;
// });

