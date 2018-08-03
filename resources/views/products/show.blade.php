@extends('partials.public_master_layout')

@section('content')  
    <div class="row">
        @auth
            @include('partials.missing_product_info')
        @endauth    
        <div class="col-sm-4">  <!--left content area // information -->
            <div class="row m-b-20">
                @include('partials.facebook_adverts') 
                @include('partials.suppliers')
                @include('partials.amazon_reports')
                @include('partials.ebay_reports')                                                                                                           
            </div> <!-- row -->        
        </div> <!--left content area // information -->
        <div class="col-sm-5"> <!-- central content area / useable information -->
            <div class="row m-b-20">      
                <div class="col-sm-12">
                    <div class="card m-b-20">
                        <img class="card-img-top" src="http://via.placeholder.com/500x500" alt="{{ $product->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>                    
                        </div> <!-- card body end -->
                    </div> <!-- card end -->  <!-- main image and title -->
                </div> 
                <div class="col-sm-12">
                    <div class="card m-b-20">
                        <div class="card-header p-b-0 p-t-0">
                            <h6 class="text-muted">Description</h6>
                        </div>                            
                        <div class="card-body">
                            <p>{{ $product->description }}</p>
                        </div>
                    </div> <!-- Description -->
                </div>    
                @include('partials.facebook_advert_templates')                 
             </div>
         </div>
        <div class="col-xl-3 ">  <!-- right content area / actions & admin -->
            @auth
            <div class="card m-b-20">  
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Admin Actions</h6>
                    @if ($product->published)
                       <p><a href="" class="btn btn-danger pull-right">Unpublish</a></p>
                    @else
                        <p><a href="" class="btn btn-success pull-right">Publish</a></p>
                    @endif
                    @if ($product->is_winning)
                        <p><a href="" class="btn btn-success pull-right">Make Promising</a></p>
                    @else
                        <p><a href="" class="btn btn-primary pull-right">Make Winning</a></p>
                    @endif                   
                    <p><a class="" href="/products/{{$product->id}}/facebook-adverts/create">Add FB Advert Report</a></p>
                    <p><a class="" href="/products/{{$product->id}}/facebook-advert-templates/create">Add Advert Text Template</a></p>
                    <p><a class="" href="/products/{{$product->id}}/suppliers/create">Add Supplier</a></p>
                    <p><a class="" href="/products/{{$product->id}}/amazon-sales-reports/create">Add Amazon Sales Report</a></p>
                    <p><a class="" href="/products/{{$product->id}}/ebay-sales-reports/create">Add Ebay Sales Report</a></p>
                </div>
            </div>           
        @endauth           
    </div>
</div> <!-- ROW END -->
    


@endsection