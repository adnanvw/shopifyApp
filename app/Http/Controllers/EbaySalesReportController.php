<?php

namespace App\Http\Controllers;

use App\EbaySalesReport;
use Illuminate\Http\Request;
use App\Product;

class EbaySalesReportController extends Controller
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
        return view('ebay-sales-reports.create', compact('product'));
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
            'date_posted' => 'required|date',
            'ships_from_country' => 'required',           
            'price'=> 'required',
            'currency' => 'required', 
            'product_url' => 'required|url'
            
        ]);

        $product->addEbaySalesReport(request()->all());   
        return redirect("/products/" . $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EbaySalesReport  $ebaySalesReport
     * @return \Illuminate\Http\Response
     */
    public function show(EbaySalesReport $ebaySalesReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EbaySalesReport  $ebaySalesReport
     * @return \Illuminate\Http\Response
     */
    public function edit(EbaySalesReport $ebaySalesReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EbaySalesReport  $ebaySalesReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EbaySalesReport $ebaySalesReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EbaySalesReport  $ebaySalesReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(EbaySalesReport $ebaySalesReport)
    {
        //
    }
}
