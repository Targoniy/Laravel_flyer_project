@inject('countries', 'App\Http\Utilities\Country')
{{ csrf_field()}}
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label for="street">Street:</label>
			<input type="text" name="street" class="form-control" id="street" required value="{{ $flyer->street }}">
		</div>

		<div class="form-group">
			<label for="city">City:</label>
			<input type="text" name="city" class="form-control" id="city" required value = {{ $flyer->city }}>
		</div>

		<div class="form-group">
			<label for="zip">Zip/Postal Code:</label>
			<input type="text" name="zip" class="form-control" id="zip" required value = {{ $flyer->zip }}>
		</div>

		<div class="form-group">
			<label for="country">Country:</label>
			<select name="country" id="country" class="form-control">
				@foreach ($countries::all() as $country => $code)
					<option value="{{ $code }}">{{ $country }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="state">State:</label>
			<input type="text" name="state" class="form-control" id="state" required value = {{ $flyer->state }}>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="price">Price:</label>
			<input type="text" name="price" class="form-control" id="price" required value = {{ $flyer->price }}>
		</div>

		<div class="form-group">
			<label for="description">Home description:</label>
			<textarea type="text" name="description" class="form-control" id="description" rows="10">{{ $flyer->description}}
			</textarea> 
		</div>		
		{{-- <div class="form-group">
			<label for="photos">Photos:</label>
			<input type="file" name="photos" class="form-control" id="photos" required value = {{ $flyer-> }}>
		</div>	 --}}	

	</div>
	<div class="col-md-12">
		<hr>
		<button type="submit" class="btn btn-primary">Update flyer</button>
	</div>
</div>