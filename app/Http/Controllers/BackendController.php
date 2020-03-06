<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class BackendController extends Controller
{
    public function dashboard($value='')
    {
    	$rooms = Room::all();
    	return view('backend.dashboard',compact('rooms'));
    }
}
    
