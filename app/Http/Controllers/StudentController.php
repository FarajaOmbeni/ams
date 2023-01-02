<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\User;
use App\Models\Score;
use App\Models\Unit;


class StudentController extends Controller
{
    public function student($applicationid, $studentid){
        return view('student/studentHome');
    }

    public function dashboard($applicationid, $studentid){
        $student=Application::findOrFail($applicationid);
        $user=User::findOrFail($studentid);
        
        return view('student/student',['student'=>$student],['user'=>$user]);
    }

    public function mydetails($applicationid, $studentid){
        $student=Application::findOrFail($applicationid);
        $user=User::findOrFail($studentid);
        return view('student/mydetails',['student'=>$student],['user'=>$user]);
    }

    public function selfregistration($applicationid, $studentid){
        $student=Application::findOrFail($applicationid);
        $user=User::findOrFail($studentid);
        return view('student/selfregistration',['student'=>$student],['user'=>$user]);
    }

    public function courseworkmarks($applicationid, $studentid, $coursecode){
        //$student=Application::findOrFail($applicationid);
        //$user=User::findOrFail($studentid);
        $score= Score::where('student_id',$studentid)->get();
       //$course=Course::where('coursecode',$coursecode);
        $units=Unit::where('course_code',$coursecode)->get();
        return view('student/courseworkmarks',['score'=>$score], ['units'=>$units]);

    }
    
    public function attendance($applicationid, $studentid){
        $student=Application::findOrFail($applicationid);
        $user=User::findOrFail($studentid);
        return view('student/attendance',['student'=>$student],['user'=>$user]);
    }
    
}