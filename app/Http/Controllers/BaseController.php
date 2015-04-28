<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use App;
class BaseController extends Controller {

	/**
	 * Display a index of academy.
	 *
	 * @return view
	 */
	public function index()
	{
		
		return view("base.home");
	}

	

	public function help()
	{
		return view("base.help");
	}

	

}
