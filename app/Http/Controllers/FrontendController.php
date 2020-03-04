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
    public function about($value='')
    {
        return view('frontend.about');
    }
    public function contact($value='')
    {
        return view('frontend.contact');
    }
    public function booking($value='')
    {
        return view('frontend.booking');
    }
}
