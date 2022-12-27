<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function index(){
        return view('lecturer/lecturer');

    }

    public function units(){
        return view('lecturer/units');

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
