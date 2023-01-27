<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use Hash;
use Illuminate\Http\Request;

class AdminmanageuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$adminmanageuser = DB::table('users');
        $adminmanageuser = User::all();

        return view('adminmanageuser.index',compact("adminmanageuser"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Adminmanageuser  $adminmanageuser
     * @return \Illuminate\Http\Response
     */
    public function show(User $adminmanageuser)
    {
        return view('adminmanageuser.show',compact('adminmanageuser'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $adminmanageuser)
    {
        $adminmanageuser->delete();
  
        return redirect()->route('adminmanageuser.index')
                        ->with('success','User deleted successfully');

    }
    
}
