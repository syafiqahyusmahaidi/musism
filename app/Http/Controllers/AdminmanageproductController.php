<?php

namespace App\Http\Controllers;
use App\Product;
use DB;
use Hash; 
use Illuminate\Http\Request;

class AdminmanageproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminmanageproduct = DB::table('products')->paginate(30);

        return view('adminmanageproduct.index',compact("adminmanageproduct"));
    }

/**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $adminmanageproduct)
    {
        $adminmanageproduct->delete();
  
        return redirect()->route('adminmanageproduct.index')
                        ->with('success','Product deleted successfully');

    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adminmanageproduct  $adminmanageproduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $adminmanageproduct)
    {
        return view('adminmanageproduct.edit',compact('adminmanageproduct'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adminmanageproduct  $adminmanageproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $adminmanageproduct)
    {
        $adminmanageproduct->update($request->all());
  
        return redirect()->route('adminmanageproduct.index')
                        ->with('success','Product updated successfully');
    }


}

