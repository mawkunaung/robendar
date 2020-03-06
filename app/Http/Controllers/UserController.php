<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::all();
        return view('backend.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.user.create');
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
            "name"=>"required|min:3|max:191",
            "email"=>"required",
            "password"=>"required",
            "phone"=>"required",
            "address"=>"required|min:3|max:191",
            "nrc"=>"required",
        ]);

        $nrc = request('nrc');
        //dd($nrc);
        if(preg_match("/^[1-9]{1,2}\/(([A-Z]|[a-z]){1}([A-Z]|[a-z]){0,2}){3}\b((\(Na\))|(\(Naing\)))[0-9]{6}$/", $nrc)) {

        $user=new User();
        $user->name=request('name');
        $user->email=request('email');
        $user->password=Hash::make(request('password'));
        $user->phone=request('phone');
        $user->address=request('address');
        $user->nrc_no=request('nrc');

        $user->save();
        $user->assignRole('Customer');
        //return redirect
        //return redirect()->route('users.index');

        // if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName()=='users.create'){
        //     return redirect()->routes('users.index');
        // }else{
        //     //return back with noti msg
        //     return back()->with('status','Register successfully!');
        // }
        return back();
        }else{
            // return redirect()->back()->withErrors('nrc format is incorrect');
            return back()->with('status','successfully!');
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
        //
        $user=User::findOrFail($id); //$course =>Model Table
        return $user;
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
        $user=User::find($id);
        return view('backend.user.edit',compact('user'));
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
            "name"=>"required|min:3|max:191",
            "email"=>"required",
            "password"=>"required",
            "phone"=>"required",
            "address"=>"required|min:3|max:191",
            "nrc"=>"required",
        ]);

        $nrc = request('nrc');
        //dd($nrc);
        if(preg_match("/^[1-9]{1,2}\/(([A-Z]|[a-z]){1}([A-Z]|[a-z]){0,2}){3}\b((\(Na\))|(\(Naing\)))[0-9]{6}$/", $nrc)) {    

        $user=User::find($id);
        $user->name=request('name');
        $user->email=request('email');
        $user->password=request('password');
        $user->phone=request('phone');
        $user->address=request('address');
        $user->nrc_no=request('nrc');

        $user->save();

        //return redirect
        return redirect()->route('users.index');
        }else{
            // return redirect()->back()->withErrors('nrc format is incorrect');
            return back()->with('status','successfully!');
        }
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
        $user=User::find($id);
        $user->delete();

         //return redirect
        return redirect()->route('users.index');
    }
}
