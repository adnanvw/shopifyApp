<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\FacebookAdvert;

class FacebookAdvertsController extends Controller
{
    public function create( Product $product )
    {    	
    	return view('facebook-adverts.create', compact('product'));
    }

    public function store( Product $product )
    {
    	$this->validate(request(), [
			'post_date' => 'required|date',
			'advert_url' => 'required|url', 
			'advert_type' => 'required',
			'likes'=> 'required|integer',
			'comments'=> 'required|integer',
			'shares' => 'required|integer',
			'fb_page_url' => 'required|url',
			'product_url'=> 'required|url',
    		'advert_url'=> 'required|url'	
    	]);

    	$product->addFbInfo(request()->all());   
    	return redirect("/products/" . $product->id);
    }
}
