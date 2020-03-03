<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roomtype;

class RoomtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomtypes = Roomtype::all();
        return view('backend.roomtypes.index',compact('roomtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.roomtypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        //Validation 
        $request->validate([
            "name" => "required|min:3|max:191",
            "photo" => "required",
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //upload photo
        if($request->hasfile('photo'))
         {

            foreach($request->file('photo') as $image)
            {
                $upload_dir = public_path().'/storage/roomtype/';
                $name=$image->getClientOriginalName();
                $image->move($upload_dir, $name);  
                $data[] = '/storage/roomtype/'.$name;  
            }
         }

        //Storage to Database
        $roomtype = new Roomtype;
        $roomtype->name = request('name');
        $roomtype->photo=json_encode($data);

        $roomtype->save();
        return redirect()->route('roomtypes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roomtype = Roomtype::find($id);
        return $roomtype;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roomtype = Roomtype::find($id);
        return view('backend.roomtypes.edit',compact('roomtype'));
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
        // dd($request);

        //Validation 
        $request->validate([
            "name" => "required|min:3|max:191",
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //upload photo
        if($request->hasfile('photo'))
         {

            foreach($request->file('photo') as $image)
            {
                $upload_dir = public_path().'/storage/roomtype/';
                $name=$image->getClientOriginalName();
                $image->move($upload_dir, $name);  
                $photo[] = '/storage/roomtype/'.$name; 
            }
            $data = json_encode($photo);
         }
         else{
                $data = request('oldphoto');
        }

        //Storage to Database
        $roomtype = Roomtype::find($id);
        $roomtype->name = request('name');
        $roomtype->photo = $data;

        $roomtype->save();
        return redirect()->route('roomtypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roomtype = Roomtype::find($id);
        $roomtype->delete();

        return redirect()->route('roomtypes.index');
    }
}
