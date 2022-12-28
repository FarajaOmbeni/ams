<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class LecturerController extends Controller
{
    public function index(){
        return view('lecturer/lecturerHome');

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
        return view('lecturer/marks');

    }

    public function attendance(){
        return view('lecturer/attendance');

    }


}
