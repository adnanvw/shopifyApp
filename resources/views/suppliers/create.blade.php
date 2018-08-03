@extends('partials.public_master_layout')

@section('content')
	<div class="row">
		<div class="col-sm-12"> <!-- Add Form -->
			<h1>Adding Supplier to {{ $product->title }}.</h1>
			<form method="POST" action="/products/{{ $product->id }}/suppliers">
				{{ csrf_field() }}				
				<div class="form-group">
			    	<label for="site_name">Site Name</label>
			    	<input type="text" class="form-control" id="site_name" placeholder="Aliexpress/Amazon US/Amazon UK Etc." name="site_name" required>
			  	</div>

			  	<div class="form-group">
			    	<label for="supplier_name">Supplier Name</label>
			    	<input type="text" class="form-control" id="supplier_name" placeholder="Store Name On Site" name="supplier_name" required>
			  	</div>
				<div class="form-group">
			    	<label for="supplier_feedback_score">Feedback Score (%)</label>
			    	<input type="text" class="form-control" id="supplier_feedback_score" placeholder="Between 0 - 100 (Do NOT include the %)" name="supplier_feedback_score" required>
			  	</div>

			  	<div class="form-group">
			    	<label for="product_url">Product URL</label>
			    	<input type="text" class="form-control" id="product_url" placeholder="URL to the product" name="product_url" required>
			  	</div>
			  	<div class="form-group">
			    	<label for="product_rating">Product Rating</label>
			    	<input type="text" class="form-control" id="product_rating" placeholder="0 - 5" name="product_rating" required>
			  	</div>
			  	<div class="form-group">
			    	<label for="quantity_sold">Quantity Sold</label>
			    	<input type="text" class="form-control" id="quantity_sold" placeholder="If not known, leave blank" name="quantity_sold" >
			  	</div>
			  	<div class="form-group">
			    	<label for="reviews_count">Reviews Count</label>
			    	<input type="text" class="form-control" id="reviews_count" placeholder="Number" name="reviews_count" required>
			  	</div>

			  	<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div> <!-- End of Add A Winning Product Form Col 12-->
	</div>
	
	@include('partials.errors')
	
@endsection