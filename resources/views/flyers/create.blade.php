
@extends('layout')

@section('content')
	<h1>Selling your Home?</h1>
	<form action="/flyers" enctype="multipart/form-data" method="POST">
		@include('flyers.form')
	</form>
@stop