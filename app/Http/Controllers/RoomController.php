<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Roomtype;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rooms = Room::all();
        $roomtypes = Roomtype::all();
        return view('backend.room.index',compact('rooms','roomtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roomtypes = Roomtype::all();
        return view('backend.room.create',compact('roomtypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "rno"=>"required",
            "rtid"=>"required",
        ]);

        $room=new Room();
        $room->room_no=request('rno');
        $room->roomtype_id=request('rtid');

        $room->save();

        //return redirect
        return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // dd($id);
        $room=Room::findOrFail($id)->with('roomtype')->first(); //$course =>Model Table
        // $roomtype=Roomtype::findOrFail($id); //$course =>Model Table
         return $room;
        
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
         $room=Room::find($id);
         $roomtypes=Roomtype::all();
         return view('backend.room.edit',compact('room','roomtypes'));

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
       $request->validate([
            "rno"=>"required",
            "rtid"=>"required",
        ]);

        $room=Room::find($id);
        $room->room_no=request('rno');
        $room->roomtype_id=request('rtid');

        $room->save();

        //return redirect
        return redirect()->route('rooms.index'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $room=Room::find($id);
        $room->delete();

         //return redirect
        return redirect()->route('rooms.index');
    }
}
