<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Score;
use App\Models\Attendance;

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

    public function enrolled(){
        return view('lecturer/enrolled');

    }

    public function marks(){
        $marks = Score::all();
        return view('lecturer/marks',['marks'=>$marks]);

    }

    public function attendance(){
        $attendance = Attendance::all();
        return view('lecturer/attendance',['attendance'=>$attendance]);

    }


}
