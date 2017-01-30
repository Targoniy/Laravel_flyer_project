@inject('countries', 'App\Http\Utilities\Country')

<div class="form-group">
	<label for="street">Street:</label>
	<input type="text" name="street" class="form-control" id="street" >
</div>

<div class="form-group">
	<label for="city">City:</label>
	<input type="text" name="city" class="form-control" id="city" >
</div>

<div class="form-group">
	<label for="zip">Zip/Postal Code:</label>
	<input type="text" name="zip" class="form-control" id="zip" >
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
	<input type="text" name="state" class="form-control" id="state" >
</div>
<hr>
<div class="form-group">
	<label for="price">Price:</label>
	<input type="text" name="price" class="form-control" id="price" >
</div>

<div class="form-group">
	<label for="description">Home description:</label>
	<textarea type="text" name="description" class="form-control" id="description" rows="10">
	</textarea> 
</div>		
<div class="form-group">
	<label for="photos">Photos:</label>
	<input type="file" name="photos" class="form-control" id="photos" >
</div>		

<button type="submit" class="btn btn-primary">Create Flayer</button>