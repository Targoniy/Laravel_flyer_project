
@extends('layout')

@section('content')
		<p>If you signed up and add flyer, you'll se short descrioption of
		each one here:</p>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<ul class="list-group">
			 	@foreach ($flyers as $flyer)
					@if ( $user && $user->owns($flyer))
					<div class="gallery_image">
						<strong><li class="list-group-item">City - {{ $flyer->city}}, Street - {{ $flyer->street }}</li></strong>
						<li style="background:grey" class="list-group-item">{!! link_to('Delete flyer', "/flyers/{$flyer->id}", 'DELETE') !!}</li>
				 		<li class="list-group-item"><a href="{{ flyer_path($flyer) }}">Edit/add photo to flyer</a></li>
				 		<li class="list-group-item"><a href= "{{ flyer_path($flyer) }}/edit">Edit description of a flyer</a></li>
				 		<br>
				 	</div>
					@endif
			 	@endforeach
			 </ul>
			 </div>
		</div>
@stop
@section('scripts.footer')
	<script>
		$(document).ready(function () {
			  $(".nav li").removeClass("active");
			  $('#All').addClass('active');
		});
	</script>
@stop
