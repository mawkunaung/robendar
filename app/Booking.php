<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=['user_id','roomtype_id','checkin_date','checkout_date','message','status'];
    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }
    public function roomtype($value='')
    {
    	return $this->belongsTo('App\Roomtype');
    }
    public function services($value='')
    {
    	return $this->hasMany('App\Service');
    }

}
