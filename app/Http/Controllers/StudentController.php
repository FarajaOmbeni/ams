<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\User;

class StudentController extends Controller
{
    public function student(){
        return view('student/studentHome');
    }

    public function dashboard($applicationid, $studentid){
        $student=Application::findOrFail($applicationid);
        $user=User::findOrFail($studentid);
        
        return view('student/student',['student'=>$student],['user'=>$user]);
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