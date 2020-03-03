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
}
