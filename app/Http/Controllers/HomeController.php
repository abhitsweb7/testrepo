<?php

namespace App\Http\Controllers;


//use Illuminate\Http\Request;

use App\User;

class HomeController extends Controller {

	public function index(){
		//echo "string";
		$data = 'Hello World';

		$users = User::all();
		//echo "<pre>";
		//print_r($users->toArray());

		return view('home', compact('data','users'));
	}


}