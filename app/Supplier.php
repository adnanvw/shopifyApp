<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
   protected $guarded = [];
	
 	public function product(){
  		return $this->belongsTo(Product::class);
  	}

	public function supplierPrices(){
    	return $this->hasMany(SupplierPrice::class);
    }
}
