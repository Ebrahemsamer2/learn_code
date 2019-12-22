<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class HomeController extends Controller
{
	public function index() {
		$user_courses = User::findOrFail(1)->courses;
		return view('home', compact('user_courses'));
	}
}
