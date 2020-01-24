<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;

class CourseController extends Controller
{	

	public function __construct() {
		$this->middleware('auth');
	}

    public function index($slug) {
    	$course = Course::where('slug', $slug)->first();
    	return view('course', compact('course'));
    }
}
