<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Score;
use App\Models\Attendance;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class LecturerController extends Controller
{
    public function index(){
       
        return view('lecturer/lecturerHome');

    }

    public function dashboard($lecturerid){
        return view('lecturer/lecturer');

    }

    public function units($lecturerid){
         $units = Unit::where('lecturer_id', $lecturerid)->get();
        //$units = Unit::all();
        return view('lecturer/units',['units'=>$units]);

    }

    public function enrolled($lecturerid){
        $units = Unit::where('lecturer_id',$id)->get();
        return view('lecturer/enrolled',['units'=>$units]);

    }

    public function marks($lecturerid){
        $marks = Score::all();
        return view('lecturer/marks',['marks'=>$marks]);

    }

    public function attendance($lecturerid){
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
