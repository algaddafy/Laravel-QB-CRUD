<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Users = DB::table('users')->get();
        return view('welcome',['usersInfo'=>$Users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        DB::table('users')->insert([
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect(route('index'))->with('status','User Added.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = DB::table('users')->find($id);
        return view('editform',['userInfo'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('users')->where('id',$id)->update([
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect(route('index'))->with('status','User Updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect(route('index'))->with('status','User Deleted.');
    }
}
