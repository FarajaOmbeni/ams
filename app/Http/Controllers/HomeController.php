<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //GET LOGGED IN USER INFORMATION
        $user_id = Auth::user()->id;
        $username = Auth::user()->name;

        $role = Auth::user()->role;

        if($role==0){
            return view('student/studentHome', compact('user_id','username'));
        }
        if($role==1){
            
            return view('admin/adminHome', compact('user_id','username'));
        }
        if($role==2){
            return view('lecturer/lecturerHome', compact('user_id','username'));
        }
        if($role==3){
            return view('staff/staffHome', compact('user_id','username'));
        }
    }
}
