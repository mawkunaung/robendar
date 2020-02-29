<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
     protected $fillable=['room_id','booking_id','status'];
}
