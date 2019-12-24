<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Track;

class HomeController extends Controller
{
	public function index() {
		$user_courses = User::findOrFail(1)->courses;

		$tracks = Track::with('courses')->orderBy('id', 'desc')->get();

		return view('home', compact('user_courses', 'tracks'));
	}
}
