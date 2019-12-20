<div class="home_picture">
	

	<div class="container-fluid">
		
		<div class="background_text">
			
			<p>Start learning <span class="number">{{ \App\Course::all()->count() }}</span> courses for <strong>Free</strong>.</p>
			<p>More than <span class="number">{{ \App\User::all()->count() }}</span> users have enrolled in <span class="number">{{ \App\Course::all()->count() }}</span> courses in <span class="number">{{ \App\Track::all()->count() }}</span> different Tracks</p>
			<a class="btn btn-primary" href="/register">Start Learning</a>

		</div>

	</div>


</div>