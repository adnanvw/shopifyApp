<?php

namespace App\Http\Controllers;

use App\Supplier;
use App\SupplierPrice;
use Illuminate\Http\Request;

class SupplierPriceController extends Controller
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
    public function create( Supplier $supplier )
    {       
        return view('supplier-prices.create', compact('supplier'));
    }  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Supplier $supplier)
    {
         $this->validate(request(), [           
            'product_price' => 'required|numeric',
            'shipping_price' => 'required|numeric', 
            'currency' => 'required', 
            'shipping_method' => 'required'          
            
        ]);

        $supplierPrice = new SupplierPrice;
        $supplierPrice->supplier_id = $supplier->id;
        $supplierPrice->product_price = request('product_price');
        $supplierPrice->shipping_price = request('shipping_price');
        $supplierPrice->currency = request('currency');
        $supplierPrice->shipping_method = request('shipping_method');
        $supplierPrice->total_price = request('product_price') + request('shipping_price');

        $supplierPrice->save();   
        return redirect("/products/" . $supplier->product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SupplierPrice  $supplierPrice
     * @return \Illuminate\Http\Response
     */
    public function show(SupplierPrice $supplierPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SupplierPrice  $supplierPrice
     * @return \Illuminate\Http\Response
     */
    public function edit(SupplierPrice $supplierPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SupplierPrice  $supplierPrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SupplierPrice $supplierPrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SupplierPrice  $supplierPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupplierPrice $supplierPrice)
    {
        //
    }
}
