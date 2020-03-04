<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable=['room_no','roomtype_id'];

    public function roomtype($value='')
    {
    	return $this->belongsTo('App\Roomtype');
    }
}
