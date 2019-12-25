<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Track;
use App\Course;

class HomeController extends Controller
{
	public function index() {
		$user_courses = User::findOrFail(1)->courses;

		$tracks = Track::with('courses')->orderBy('id', 'desc')->get();

		// get famous tracks ids

		$famous_tracks_ids = Course::pluck('track_id')->countBy()->sort()->reverse()->keys()->take(10);

		$famous_tracks = Track::withCount('courses')->whereIn('id', $famous_tracks_ids)->orderBy('courses_count', 'desc')->get();

		return view('home', compact('user_courses', 'tracks', 'famous_tracks'));
	}
}
