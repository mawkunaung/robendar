<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roomtype extends Model
{
    protected $fillable=['name','photo','price'];

    public function services($value='')
    {
    	return $this->belongsToMany('App\Service','roomtype_services')->withTimestamps();
    }//pivou table rs
    public function bookings($value='')
    {
        return $this->belongsToMany('App\Booking');
    }

    
   
}
