<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Score;
use App\Models\Attendance;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
{
    public function index(){
       
        return view('staff/staffHome');

    }

    public function staff(){
        $users = DB::select('select * from staff');
       return view('stud_view',['users'=>$users]);

    }

    public function HRfired(){
        $staff = Staff::where('status','1')->get();
        return view('staff/HRfired',['staff'=>$staff]);

    }

    // public function financedept($id){
    //     // $units = Unit::where('lecturer_id',$id)->get();
    //     // return view('lecturer/enrolled',['units'=>$units]);

    // }

    public function cleanrota(){
        $staff = Staff::where('dep_id', '3')->get();
        return view('staff/cleanrota' ,['staff'=>$staff]);

    }

    public function lostandfound(){
        $lostitem = lostandfound::all();
        return view('staff/lostandfound',['lostitem'=>$lostandfound]);

    }

    public function departments(){
        $departments = lostandfound::all();
        return view('staff/lostandfound');
        
    }


}

 