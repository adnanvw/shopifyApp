<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Product extends Model
{
    protected $guarded = [];

    public function get_shortened_title(){
    	if ( strlen($this->title) >= 21 ) {
    		return substr($this->title, 0, 20)."..."; 
    	} else {
    		return $this->title;
    	}
    }

    public function facebook_adverts()
    {
    	return $this->hasMany(FacebookAdvert::class);
    }

    public function facebookAdvertTemplates()
    {
        return $this->hasMany(FacebookAdvertTemplate::class);
    }

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }

    public function amazonSalesReports()
    {
        return $this->hasMany(AmazonSalesReport::class);
    }
    

    public function ebaySalesReports()
    {
        return $this->hasMany(EbaySalesReport::class);
    }
    

    public function addFbInfo( $request ){
        
        $productPostDate = new Carbon( $this->created_at );
        $advertPostDate = new Carbon ( $request['post_date'] );      

        $diff = $productPostDate->diffInDays(($advertPostDate));
        if ($diff <= 0) {
            $diff = 1;
        }        
        $likesScore = $request['likes'] * 2;
        $commentsScore = $request['comments'] * 3;
        $sharesScore = $request['shares'] * 4;
        $tally = $likesScore + $commentsScore + $sharesScore;
        $engagementScore = $tally / $diff;
        $engagementScore = round($engagementScore, 2);

        $request['engagement_score'] = $engagementScore;
       
        $this->facebook_adverts()->create($request) ;
     }    

    public function addTextTemplate( $request)        
    {
        $this->facebookAdvertTemplates()->create($request);
    }

    public function addSupplier( $request )
    {
        $this->suppliers()->create($request);
    }
     public function addAmazonSalesReport( $request )
    {
        $this->amazonSalesReports()->create($request);
    }
     public function addEbaySalesReport( $request )
    {
        $this->ebaySalesReports()->create($request);
    }

}
