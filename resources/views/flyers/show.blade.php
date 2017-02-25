@extends('layout')

@section('content')
	
	<div class="row">
		<div class="col-md-4">
			<h1>{!! $flyer->street !!}</h1>
			<h1>${!! number_format($flyer->price) !!}</h1>
			<hr>

			<div class="descriprion">
				{!! nl2br($flyer->description) !!}
			</div>
		</div>

		<div class="col-md-8 gallery">
			@foreach ($flyer->photos->chunk(4) as $set)
				<div class="row">
					@foreach ($set as $photo)
						<div class="col-md-3 gallery_image">
							<img src="/{{ $photo->thumbnail_path }}" alt="">
							</div>
					@endforeach
				</div>
			@endforeach

			@if ($user && $user->owns($flyer))
				<form id="addPhotosForm" action="/{{ $flyer->zip }}/{{ $flyer->street }}/photos" method="POST" class="dropzone">
				{{ csrf_field() }}
				</form>
			@endif

		</div>
	</div>
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