@extends('partials.public_master_layout')

@section('content')
	<div class="row">
		<div class="col-sm-12"> <!-- Add Form -->
			<h1>Adding facebook advert template to {{ $product->title }}.</h1>
			<form method="POST" action="/products/{{ $product->id }}/ebay-sales-reports">
				{{ csrf_field() }}
				<div class="form-group">
			    	<label for="country">Country</label>
			    	<input type="text" class="form-control" id="country" placeholder="Country" name="country" required>
			  	</div>

			  	<div class="form-group">
			    	<label for="date_posted">Date Posted</label>
			    	<input type="date" class="form-control" id="date_posted" placeholder="dd/mm/yyyy" name="date_posted" required>
			  	</div>

			  	<div class="form-group">
			    	<label for="ships_from_country">Ships From Country</label>
			    	<input type="text" class="form-control" id="ships_from_country" placeholder="Ships From Country" name="ships_from_country" required>
			  	</div>

			  	<div class="form-group">
			    	<label for="product_url">Product Url</label>
			    	<input type="text"  class="form-control" id="product_url" placeholder="Product Url" name="product_url" required>
			  	</div>

			  	<div class="form-group">
			    	<label for="price">Price</label>
			    	<input type="text"  class="form-control" id="price" placeholder="Price" name="price" required>
			  	</div>

			  	<div class="form-group">
			    	<label for="currency">Currency</label>
			    	<input type="text"  class="form-control" id="currency" placeholder="Currency" name="currency" required>
			  	</div>

			  	<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div> <!-- End of Add A Winning Product Form Col 12-->
	</div>
	
	@include('partials.errors')
	
@endsection