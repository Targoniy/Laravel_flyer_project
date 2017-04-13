@extends('layout')

@section('content')
	 <h1>About page</h1>
	 <h3>Learning project for creating flyer for saling anything.</br>
        Just add several items of text, drag photo and that's it! <br>
		In the "All flyers" tab you can see all your's flyers.<br>
		There you can also edit them or delete entirely.
        </h3>
      <br>
      
      <h3>Used tools:</h3>
      <ul>
      	<li>Lity</li>
      	<li>Dropzone</li>
      	<li>Faker</li>
      </ul>

      <h3>Used features of Laravel</h3>	
		<ul>
	      	<li>Authentification</li>
	      	<li>Flashes</li>
	      	<li>Unit testing</li>
	      	<li>Migration</li>
	      	<li>Models</li>

		</ul>
@stop

@section('scripts.footer')
	<script>
		$(document).ready(function () {
			  // $(".nav li").removeClass("active");
			  $('#About').addClass('active');
		});
	</script>
@stop