<div class="home_picture">
	

	<div class="container-fluid">
		
		<div class="background_text">
			
			<p>Start learning {{ \App\Course::all()->count() }} courses for <strong>Free</strong>.</p>
			<p>More than {{ \App\User::all()->count() }} users have enrolled in {{ \App\Course::all()->count() }} courses in {{ \App\Track::all()->count() }} Tracks</p>
			<a class="btn btn-primary" href="/register">Start Learning</a>

		</div>

	</div>


</div>