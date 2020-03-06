<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
     protected $fillable=['name','logo'];
     public function roomtypes($value='')
    {
    	return $this->belongsToMany('App\Roomtype')->withTimestamps();
    }
    public function roomtype($value='')
    {
    	return $this->belongsTo('App\Roomtype');
    }
    // public function bookings($value='')
    // {
    // 	return $this->belongsToMany('App\Booking')->withTimestamps();
    // }
}
