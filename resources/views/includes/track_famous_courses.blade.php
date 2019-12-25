<div class="container">

	<div class="famous-courses">
	
		<?php $i = 0; ?>

		@foreach($tracks as $track)

		<h4>Last {{$track->name}} courses</h4>

		<div class="row">
			
			@foreach($track->courses()->limit(4)->get() as $course)

			<div class="col-sm-3">
				<div class="course">
					@if($course->photo)
					<a href=""><img src="/images/{{ $course->photo->filename }}"></a>
					@else
					<a href=""><img src="/images/default.jpg"></a>
					@endif
					<h6><a href="#">{{\Str::limit($course->title, 50)}}</a></h6>
					<span style="margin-left: 10px; font-weight: 500;" class="{{ $course->status == '0' ? 'text-success' : 'text-danger' }}">{{ $course->status == '0' ? 'FREE' : 'PAID' }}</span>
					<span style="margin-left: 50%">{{ count($course->users) }} users</span>
				</div>
			</div>

			@endforeach

		</div>


		@if($i == 1)

			<div class="famous-tracks">
				
				<h4>Famous topic for you</h4>

				<div class="tracks">
					<ul class="list-unstyled">
					@foreach($famous_tracks as $famous_track)

					<li><a class="btn track-name" href="#">{{ $famous_track->name }}</a></li>

					@endforeach
					</ul>
				</div>

			</div>

		@endif

		<?php $i++; ?>
		@endforeach
	</div>

</div>