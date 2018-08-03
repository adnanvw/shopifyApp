@extends('partials.public_master_layout')

@section('content')
	<div class="row m-b-10">
		<div class="col-sm-12 ">
			<!-- Filter & Refine Buttons -->
			<div class="dropdown pull-right m-t-15">
				 <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
		        	<button type="button" id="btnGroupDrop1" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
		        		Order
		        	</button>        
		        	<div class="dropdown-menu " aria-labelledby="btnGroupDrop1">
			        	<a class="dropdown-item" href="/">Clear All</a>
			            <a class="dropdown-item" href="?filter=date&order=ASC">Date Added, Old - New</a>
					  	<a class="dropdown-item" href="?filter=date&order=DESC">Date Added, New - Old</a>
					    <a class="dropdown-item" href="?filter=fb_advert_likes_count&order=ASC">Likes, Low - High</a>
					    <a class="dropdown-item" href="?filter=fb_advert_likes_count&order=DESC">Likes, High - Low</a>
					    <a class="dropdown-item" href="?filter=fb_advert_comments_count&order=ASC">Comments, Low - High</a>
					    <a class="dropdown-item" href="?filter=fb_advert_comments_count&order=DESC">Comments, High - Low</a>
					    <a class="dropdown-item" href="?filter=fb_advert_shares_count&order=ASC">Shares, Low - High</a>
					    <a class="dropdown-item" href="?filter=fb_advert_shares_count&order=DESC">Shares, High - Low</a>		  
					    <a class="dropdown-item" href="?filter=fb_advert_date_posted&order=ASC">Advert Post Date, Old - New</a>
					    <a class="dropdown-item" href="?filter=fb_advert_date_posted&order=DESC">Advert Post Date, New - Old</a>
			        </div>
			    </div>   
			    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
			        <button type="button" id="btnGroupDrop2" class="btn btn-purple dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Filter</button>
			        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop2">
			        	<a class="dropdown-item" href="">View All</a>	          								
						<a class="dropdown-item" href="?search=">Catergory 1 <span class="badge badge-danger badge-pill">5</span></a>
						<a class="dropdown-item" href="?search=">Catergory 2 <span class="badge badge-danger badge-pill">6</span></a>	
						<a class="dropdown-item" href="?search=">Catergory 3 <span class="badge badge-danger badge-pill">7</span></a>												
					</div>
			  
			    </div>
			</div>
		</div>
	</div>

	<!-- Display all the product from the database -->
	<div class="row">
		@foreach ($products as $product)
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">							
				<div class="card productsCard m-b-20" style="width: 100%;">
					<a href="/products/{{ $product->id }}">						
						<img class="card-img-top " alt="Responsive image" src="http://via.placeholder.com/500x500">
						<h6 class="text-center no-info"> </h6>
						<div class="card-body">	
							<h6 class="card-title text-center">{{ $product->get_shortened_title() }}</h6>
							<p class="card-text text-center"><small><em>{{ $product->created_at->diffForHumans() }}</em></small></p>
							<p class="fbinfop text-center">											
								<span><i class="fa fa-thumbs-up"></i> 11110</span>										
								<span> | </span>										
								<span><i class="fa fa-comments" aria-hidden="true"></i> 2000</span>										
								<span> | </span>
								<span><i class="fa fa-share" aria-hidden="true"></i> 500</span>											
							</p>
						</div>
					</a>
				</div>
			</div>
		@endforeach				
	</div>
	<!-- end of product displays -->   
@endsection