<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





/* Base Controller */

Route::get('/', "BaseController@index");
Route::get("/help", "BaseController@help");

/* User Controller */

Route::get("/login", "UserController@login");
Route::post("/login", "UserController@loginPost");
Route::get("/register", "UserController@register");
Route::post("/register", "UserController@registerPost");


/* Free Controller */

Route::get('/lang', function($lang){

	if ($lang == "ES" ) {
		App::setLocale("es");
	}else if($lang == "EN"){
		App::setLocale("en");
	}

});