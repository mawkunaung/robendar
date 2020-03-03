<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roomtype extends Model
{
    protected $fillable=['name','photo'];
    public function services($value='')
    {
    	return $this->belongsToMany('App\Service')->withTimestamps();
    }
}
