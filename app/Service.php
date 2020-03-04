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
    public function roomtype($value='')//Relationship to CourseTable
    {
    	return $this->belongsTo('App\Roomtype');
    }
}
