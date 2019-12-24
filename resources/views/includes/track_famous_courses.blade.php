<div class="container">

	<div class="famous-courses">

		@foreach($tracks as $track)

		<h4>Last {{$track->name}} course</h4>

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
					<span style="margin-left: 10px;" class="{{ $course->status == '0' ? 'text-success' : 'text-danger' }}">{{ $course->status == '0' ? 'FREE' : 'PAID' }}</span>
					<span style="float: right; margin-left: -10px">{{ count($course->users) }} users</span>
				</div>
			</div>

			@endforeach

		</div>

		@endforeach
	</div>

</div>