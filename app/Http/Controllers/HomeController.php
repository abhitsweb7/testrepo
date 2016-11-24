<?php

namespace App\Http\Controllers;


//use Illuminate\Http\Request;

use App\User;

class HomeController extends Controller {

	// this is index function for test purpose
	public function index()
	{
		$data = 'Hello World';

		$users = User::all();

		return view('home', compact('data','users'));
	}


}
