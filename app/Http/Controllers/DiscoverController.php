<?php

namespace App\Http\Controllers;

use App\Discover;
use Illuminate\Http\Request;

class DiscoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discover = Discover::all();

        return view('discover.index',compact("discover"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('discover.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Discover::create($request->all());
   
        return redirect()->route('discover.index')
                         ->with('success','Discover created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function show(Discover $discover)
    {
        return view('discover.show',compact('discover'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function edit(Discover $discover)
    {
        return view('discover.edit',compact('discover'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discover $discover)
    {
        $discover->update($request->all());
  
        return redirect()->route('discover.index')
                        ->with('success','Discover updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discover $discover)
    {
        $discover->delete();
  
        return redirect()->route('discover.index')
                        ->with('success','Discover deleted successfully');

    }
}
