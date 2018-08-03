<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
        if ( Auth::check() ) {
            $products = Product::latest()->where('is_winning', 1)->get();
        } else{
             $products = Product::latest()->where('is_winning', 1)->where('published', 1)->get();
        }
    	
    	return view('products.index', compact('products'));
    }

    public function show( Product $product )
    {    	
    	return view('products.show', compact('product'));
    }

    public function create(  )
    {    	
    	return view('products.create');
    }

    public function store(){

        $this->validate(request(), [
            
            'title' => 'required|min:5|max:255',
            'description' =>   'required|min:10|max:15000'
        ]);
        $product = new Product;
        $product->title = request('title');
        
        $product->description = request('description');
        $product->is_winning = 0;
        $product->user_id = Auth::id();
        $product->save();
        return redirect('/products');
    }

   
}
