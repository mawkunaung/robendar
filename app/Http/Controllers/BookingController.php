<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\User;
use App\Roomtype;
use App\Service;
use App\Room;
use Illuminate\Support\Facades\URL;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::where('status',0)->get();
        return view('backend.bookings.index',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $roomtypes = Roomtype::all();
        return view('backend.bookings.create',compact('users','roomtypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        $request->validate([
            "checkin" => "required",
            "checkout" => "required",
            "userid" => "required",
            "roomtypeid" => "required",
            "message" => "required",
        ]);

        $booking = new Booking;
        $booking->checkin_date = request('checkin');
        $booking->checkout_date = request('checkout');
        $booking->user_id = request('userid');
        $booking->roomtype_id = request('roomtypeid');
        $booking->message = request('message');

        $booking->save();

        
         //return redirect()->route('bookings.index');
        if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName()=='bookings.create'){
           return redirect()->route('bookings.index');
        }else{
            //retrun back with noti message
            return back()->with('status','Booking successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $services = Service::all();
        $users = User::all();
        $roomtypes = Roomtype::all();
        $booking = Booking::find($id);
        return view('backend.bookings.show',compact('booking','roomtypes','users','services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        return redirect()->route('bookings.index');
    }
    public function confirm($id)
    {
        $booking = Booking::find($id);
        $roomtype = $booking->roomtype_id;

        $booking->status=true;
        $booking->save();

        $room = Room::where('roomtype_id',$roomtype)->get();
        // dd($room);
        return view('backend.bookings.confirm',compact('booking','roomtype','room'));

    }
}
