<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('backend.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.services.create');
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
            "logo" => "required|mimes:jpeg,jpg,png"
        ]);

        //Upload exit file
        if($request->hasfile('logo')){
        $logo = $request->file('logo');
        $upload_dir = public_path().'/storage/service/';
        $name = time().'.'.$logo->getClientOriginalExtension();
        $logo->move($upload_dir,$name);
        $path = '/storage/service/'.$name;
       }

        //Storage to Database
        $service = new Service;
        $service->name = request('name');
        $service->logo = $path;

        $service->save();
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return response()->json($service);
        // return view('backend.services.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('backend.services.edit',compact('service'));

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
            "logo" => "required|mimes:jpeg,jpg,png"
        ]);

        //Upload exit file
        if($request->hasfile('logo')){
        $logo = $request->file('logo');
        $upload_dir = public_path().'/storage/service/';
        $name = time().'.'.$logo->getClientOriginalExtension();
        $logo->move($upload_dir,$name);
        $path = '/storage/service/'.$name;
       }else{
        $path = $request('oldlogo');
       }

        //Storage to Database
        $service = Service::find($id);
        $service->name = request('name');
        $service->logo = $path;

        $service->save();
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();

        return redirect()->route('services.index');
    }
}
