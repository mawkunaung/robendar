<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
     protected $fillable=['room_id','booking_id','status'];
     public function room($value='')
     {
     	return $this->belongsTo('App\Room');
     }
     public function booking($value='')
     {
     	return $this->belongsTo('App\Booking');
     }
}
