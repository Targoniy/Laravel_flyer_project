
@extends('layout')

@section('content')
	<h1>Selling your Home?</h1>
	<hr>
	@if (count($errors) > 0 )
		<div class='alert alert-message'>
			<ul>
				@foreach ($errors as $error)
					<li>
						{{ $error }}
					</li>
				@endforeach
			</ul>
		 </div>
	@endif
	<form action="/flyers" enctype="multipart/form-data" method="POST" >
		@include('flyers.form')
	</form>
@stop