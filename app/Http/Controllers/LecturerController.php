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

    public function dashboard(){
        return view('lecturer/lecturer');

    }

    public function units(){
        // $units = Unit::where('unit_code','ICS2205')->get();
        $units = Unit::all();
        return view('lecturer/units',['units'=>$units]);

    }

    public function enrolled($id){
        $units = Unit::where('lecturer_id',$id)->get();
        return view('lecturer/enrolled',['units'=>$units]);

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
