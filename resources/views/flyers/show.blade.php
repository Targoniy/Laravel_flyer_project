@extends('layout')

@section('content')
	
	<div class="row">
		<div class="col-md-3">
			<h1>{!! $flyer->street !!}</h1>
			<h1>${!! number_format($flyer->price) !!}</h1>
			<hr>

			<div class="descriprion">
				{!! nl2br($flyer->description) !!}
			</div>
		</div>

		<div class="col-md-9">
			@foreach ($flyer->photos as $photo)
				<img src="{{ $photo->path }}" alt="">
			@endforeach
		</div>
	</div>
	<hr>
	<h1>Add photo</h1>
	<form id="addPhotosForm" action="/{{ $flyer->zip }}/{{ $flyer->street }}/photos" method="POST" class="dropzone">
	{{ csrf_field() }}
	</form>
@stop

@section('scripts.footer')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
	<script>
	Dropzone.options.addPhotosForm = {
		paramName: 'photo',
		maxFilesize: 3,
		acceptedFiles: ',jpg, .jpeg, .png, .bmp'
	};
	</script>
@stop