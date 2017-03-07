@extends('layout')

@section('content')
	 	@foreach ($flyers as $flyer)
			@if ($user && $user->owns($flyer))
		 		<li>{{$flyer->street}} - ${{$flyer->price}}</li>
			 @endif
	 	@endforeach
@stop