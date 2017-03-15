@extends('layout')

@section('content')
	 <h1>Targoniy Andriy</h1>
	 <h2><a href="https://github.com/Targoniy">Github</a></h2>
	 <h2>9225@ukr.net</h2>
	 <h2>+38 095 604 89 00</h2>
@stop

@section('scripts.footer')
	<script>
		$(document).ready(function () {
			  $(".nav li").removeClass("active");
			  $('#Contact').addClass('active');
		});
	</script>
@stop