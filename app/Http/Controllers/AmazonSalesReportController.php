<?php

namespace App\Http\Controllers;

use App\AmazonSalesReport;
use Illuminate\Http\Request;
use App\Product;

class AmazonSalesReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create( Product $product )
    {       
        return view('amazon-sales-reports.create', compact('product'));
    }  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
         $this->validate(request(), [           
            'country' => 'required', 
            'product_rating' => 'required',
            'reviews_count' => 'required|integer',
            'price'=> 'required',
            'currency' => 'required', 
            'product_url' => 'required|url'
            
        ]);

        $product->addAmazonSalesReport(request()->all());   
        return redirect("/products/" . $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AmazonSalesReport  $amazonSalesReport
     * @return \Illuminate\Http\Response
     */
    public function show(AmazonSalesReport $amazonSalesReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AmazonSalesReport  $amazonSalesReport
     * @return \Illuminate\Http\Response
     */
    public function edit(AmazonSalesReport $amazonSalesReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AmazonSalesReport  $amazonSalesReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AmazonSalesReport $amazonSalesReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AmazonSalesReport  $amazonSalesReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(AmazonSalesReport $amazonSalesReport)
    {
        //
    }
}
