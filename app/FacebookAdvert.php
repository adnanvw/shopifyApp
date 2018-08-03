<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class FacebookAdvert extends Model
{
	protected $guarded = [];
	
 	public function product(){
	  	return $this->belongsTo(Product::class);
	  }

 public function postedDateForHuman()
 {
 		$dateTime = $this->post_date;
 		$dateTime = new Carbon($dateTime);
 		return $dateTime->diffForHumans();
 }
}
