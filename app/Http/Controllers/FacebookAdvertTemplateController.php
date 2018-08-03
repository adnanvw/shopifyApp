<?php

namespace App\Http\Controllers;

use App\FacebookAdvertTemplate;
use Illuminate\Http\Request;
use App\Product;

class FacebookAdvertTemplateController extends Controller
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
    public function create(Product $product)
    {
        return view('facebook-advert-templates.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Product $product)
    {
        $this->validate(request(), [
            'advert_text' => 'required'            
        ]);

        $product->addTextTemplate( request()->all() );
        return redirect("/products/" . $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FacebookAdvertTemplate  $facebookAdvertTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(FacebookAdvertTemplate $facebookAdvertTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FacebookAdvertTemplate  $facebookAdvertTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(FacebookAdvertTemplate $facebookAdvertTemplate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FacebookAdvertTemplate  $facebookAdvertTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FacebookAdvertTemplate $facebookAdvertTemplate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FacebookAdvertTemplate  $facebookAdvertTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacebookAdvertTemplate $facebookAdvertTemplate)
    {
        //
    }
}
