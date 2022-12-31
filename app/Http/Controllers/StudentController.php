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
    
}

