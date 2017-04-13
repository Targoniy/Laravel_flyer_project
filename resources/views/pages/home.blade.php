@extends('layout')

@section('content')
<div class="jumbotron">
		<h1>Project Flyer</h1>
        <p>
	        Learning project for creating flyer for saling anything.
	        Just add several items of text, drag photo and that's it!
        </p>

        @if ($signedIn)
	        <a href="/flyers/create/" class="btn btn-primary">Create a Flyer</a>
		@else
			<a href="/auth/login/" class="btn btn-primary">Sign Up</a>
        @endif

      </div>
@stop
