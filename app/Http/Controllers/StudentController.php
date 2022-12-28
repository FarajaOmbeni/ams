<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student(){
        return view('student/studentHome');
    }

    public function dashboard(){
        return view('student/student');
    }

    public function mydetails(){
        return view('student/mydetails');
    }

    public function selfregistration(){
        return view('student/selfregistration');
    }

    public function courseworkmarks(){
        return view('student/courseworkmarks');
    }
    
    public function attendance(){
        return view('student/attendance');
    }

    public function progressreport(){
        return view('student/progressreport');
    }

    public function examcard(){
        return view('student/examcard');
    }

    public function feestructure(){
        return view('student/feestructure');
    }
    public function feestatement(){
        return view('student/feestatement');
    }
    public function graduation(){
        return view('student/graduation');
    }
}

