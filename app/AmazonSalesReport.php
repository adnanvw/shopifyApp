<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AmazonSalesReport extends Model
{
    protected $guarded = [];
	
 	public function product(){
	  	return $this->belongsTo(Product::class);
	  }
}
