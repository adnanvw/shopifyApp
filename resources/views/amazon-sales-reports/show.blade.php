@extends('partials.public_master_layout')

@section('content')  	

	<h1>{{ $product->title }}</h1>
    <h2>{{ $product->description }}</h2>

    @foreach ( $product->facebook_adverts as $advert )
    	 <p>Advert Url: {{ $advert->advert_url }}</p>
    	<br>
    	 <p>Advert Posted: {{ $advert->postedDateForHuman() }}</p>
    	  <hr>
    @endforeach

    <p>If admin we want a add button for extra information.</p>
    <a href="/facebook-adverts/create/{{$product->id}}">Add new advert details.</a>
   

@endsection