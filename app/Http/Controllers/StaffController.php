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

    public function financedept($id){
        // $units = Unit::where('lecturer_id',$id)->get();
        // return view('lecturer/enrolled',['units'=>$units]);

    }

    public function marks(){
        $marks = Score::all();
        return view('lecturer/marks',['marks'=>$marks]);

    }

    public function attendance(){
        $attendance = Attendance::all();
        return view('lecturer/attendance',['attendance'=>$attendance]);

    }

    public function MarkAttendance(){
        Validator::make(request()->all(),[
            'student_id'=>'required',
            'Attended'=>'required',
            'unit_code'=>'required'
        ])->validate();

        $attend=new Attendance();
        $attend->student_id=request('student_id');
        $attend->Attended=request('Attended');
        $attend->unit_code=request('unit_code');
        $attend->save();

        return redirect('lecturer/attendance');
        
    }


}

 