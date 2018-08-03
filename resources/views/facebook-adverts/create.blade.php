@extends('partials.public_master_layout')

@section('content')
	<div class="row">
		<div class="col-sm-12"> <!-- Add A Winning Product Form -->
			<h1>Adding facebook advert to {{ $product->title }}.</h1>
			<form method="POST" action="/products/{{ $product->id }}/facebook-adverts">
				{{ csrf_field() }}
				<div class="form-group">
			    	<label for="post_date">Advert Post Date</label>
			    	<input type="date" class="form-control" id="post_date" placeholder="Advert Post Date" name="post_date" required>
			  	</div>

			  	<div class="form-group">
			    	<label for="advert_url">Advert URL</label>
			    	<input type="text" class="form-control" id="advert_url" placeholder="URL to advert on Facebook" name="advert_url" required>
			  	</div>

			  	<div class="form-group">
			    	<label for="advert_type">Advert Type</label>
			    	<input type="text" class="form-control" id="advert_type" placeholder="Image/Text/Video" name="advert_type" required>
			  	</div>

			  	<div class="form-group">
			    	<label for="likes">Likes</label>
			    	<input type="text" class="form-control" id="likes" placeholder="Likes" name="likes" required>
			  	</div>

			  	<div class="form-group">
			    	<label for="comments">Comments</label>
			    	<input type="text" class="form-control" id="comments" placeholder="Comments" name="comments" required>
			  	</div>

			  	<div class="form-group">
			    	<label for="shares">Shares</label>
			    	<input type="text" class="form-control" id="shares" placeholder="Shares" name="shares" required>
			  	</div>

			  	<div class="form-group">
			    	<label for="fb_page_url">Facebook Page Url</label>
			    	<input type="text" class="form-control" id="fb_page_url" placeholder="The URL to the Facebook Page" name="fb_page_url" required>
			  	</div>

			  	<div class="form-group">
			    	<label for="product_url">Product URL</label>
			    	<input type="text" class="form-control" id="product_url" placeholder="Product URL" name="product_url" required>
			  	</div>		  	

			  	<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div> <!-- End of Add A Winning Product Form Col 12-->
	</div>
	
	@include('partials.errors')
	
@endsection