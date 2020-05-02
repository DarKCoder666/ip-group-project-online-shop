<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('my-profile')->with('user', auth()->user()); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z0-9]{5,}$/'],
            'postal_code' => ['required', 'unique:users', 'regex:/\d{7}/'],
            'email' => ['required', 'unique:users', 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'.auth()->id()], 
            'password' => ['sometimes', 'nullable', 'string', 'min:8', 'confirmed'],
            //'password' => ['required', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{5,})/'],
            'telephone_num' => ['required', 'unique:users', 'regex:/^\+998-\d{2}-\d{7}$/'],
            'city' => ['required', 'regex:/^[a-zA-Z]+$/'],
            'date_of_birth' => ['required', 'regex:/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[12])\/(19|20)\d{2}$/'],
            'passport_num' => ['required', 'unique:users', 'regex:/^(AA|AB)(\d){7}$/'],
        ]);

        if (! $request->filled('password')) {
            return "PASSWORD NOT FILLED";
        } 
        return "PASSWORD FILLED";
      // dd($request->all());
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
    }
}
