<?php

namespace App\Http\Controllers;

use App\Models\Users;

class UserController extends Controller
{
	/**
	*
	*	This gives us our list of users that our app will use for the list component
	*
	*	@return    A simple array whith the names of the users from the DB, laravel automaticly will retrieve *              JSON format in the api
	*/
	public static function getUserList(){
			$usersFromDB = Users::all();
			$usersList = [];

			// usersFromDB is a lara collection, so use map method to generate $usersList out of the wanted data out of usersFromDb
			$usersList = $usersFromDB->map(function( $user)  {
				return $user['name'];
			});
			return $usersList;
	}
	/**
	*
	*	Inserts the user name to our model
	*
	*/

	public  function add(){
		$this->validate(request(),[
			'userName' => 'bail|required|regex:/^[a-zA-Z]+([-\s]{1}[a-zA-Z]+)*$/i|unique:posts|max:255'
		]);

		Users::forceCreate([
			'name' => request('userName')
		]);

		return ['message' => 'User added'];


	    // 	$user = new Users;

	    // 	$user->name = $req->input("userName");

	    // 	$user->save();
		   //  return response()->json($user);
	}	
}
