@extends('layout')

@section('content')
		<p>If you signed up and add flyer, you'll se short descrioption of
		each one here:</p>
	 	@foreach ($flyers as $flyer)
			@if ($user && $user->owns($flyer))
		 		<li>{{$flyer->street}} - ${{$flyer->price}}</li>
			@endif
	 	@endforeach
@stop
@section('scripts.footer')
	<script>
		$(document).ready(function () {
			  $(".nav li").removeClass("active");
			  $('#All').addClass('active');
		});
	</script>
@stop