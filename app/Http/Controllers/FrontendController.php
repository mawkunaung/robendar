<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roomtype;

class FrontendController extends Controller
{
    public function main($value='')
    {
    	$roomtypes = Roomtype::all();
        return view('frontend.main',compact('roomtypes'));
    }
}
