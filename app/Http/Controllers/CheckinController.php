<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Checkin;
use App\Room;
use App\Booking;

class CheckinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        $bookings = Booking::all();
        $checkins = Checkin::where('status',0)->get();
        //dd($checkinckins);
        return view('backend.checkins.index',compact('checkins','rooms','bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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

        $checkin = new Checkin;
        $checkin->room_id = request('roomid');
        $checkin->booking_id = request('booikingid');

        $checkin->save();

        return redirect()->route('bookings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
        $checkin = Checkin::find($id);
        return view('backend.checkins.show',compact('checkin'));
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
        $checkin = Checkin::find($id);
        $checkin->delete();

        return redirect()->route('checkins.index');
    }
    public function checkout($id)
    {
      //  dd($id);
        $checkin = Checkin::find($id);
        $checkin->status=true;
        $checkin->save();

        return redirect()->route('checkins.index');
    }
}
