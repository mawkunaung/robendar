<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roomtype;
use App\User;
use App\Service;

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
        $users = User::all();
        $roomtypes = Roomtype::all();
        return view('frontend.booking',compact('users','roomtypes'));
    }
    public function roomtype_detail($id)
    {
        $services = Service::all();
        $roomtype = Roomtype::find($id);
        return view('frontend.roomtype',compact('roomtype','services'));
    }
}
