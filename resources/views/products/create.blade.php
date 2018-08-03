@extends('partials.public_master_layout')

@section('content')
	<div class="row">
		<div class="col-sm-12"> <!-- Add A Winning Product Form -->
			<h1>Add A New Winning Product.</h1>
			<form method="POST" action="/products">
				{{ csrf_field() }}
				<input type="hidden" name="user_id" value="1">
			  <div class="form-group">
			    <label for="title">Product Title</label>
			    <input type="text" class="form-control" id="title" placeholder="Product Title" name="title" required>  

			  </div>

			  <div class="form-group">

			    <label for="description">Product Description</label>	    
			    <textarea class="form-control" id="description" rows="5" name="description" placeholder="Product Description" required></textarea>

			  </div>
			  
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div> <!-- End of Add A Winning Product Form Col 12-->
	</div>
	
	@include('partials.errors')
	
@endsection