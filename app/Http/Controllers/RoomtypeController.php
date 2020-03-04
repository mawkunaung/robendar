<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roomtype;
use App\Service;

class RoomtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $roomtypes = Roomtype::all();
        return view('backend.roomtypes.index',compact('roomtypes','services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('backend.roomtypes.create',compact('services'));
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
            "price" => "required",
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
        $roomtype->price = request('price');
        $roomtype->photo=json_encode($data);

        $roomtype->save();
        //pivot for roomservices
        $roomtype->services()->attach(request('services'));

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
        $roomtype = Roomtype::where('id',$id)->with('services')->get();
        // dd($roomtype);
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
        $services = Service::all();
        $roomtype = Roomtype::find($id);
        return view('backend.roomtypes.edit',compact('roomtype','services'));
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
        $roomtype->price = request('price');
        $roomtype->photo = $data;

        $roomtype->save();

        $roomtype->services()->detach();
        $roomtype->services()->attach(request('services'));



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
