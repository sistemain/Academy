<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;

class UserController extends Controller {

	public function login()
	{
		return view("user.login");
	}

	public function loginPost()
	{
		
	}

	public function register()
	{
		return view("user.register");
	}

	public function registerPost(UserRequest $request)
	{
		Log::info("entre");

	}

}
