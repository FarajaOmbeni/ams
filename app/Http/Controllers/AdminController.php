<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin');
    }

    public function accept(){
        return view('accept');
    }

    public function enrol(){
        return view('enrol');
    }

    public function registration_requests(){
        return view('registration_requests');
    }

    public function assign_lecturers(){
        return view('assign_lecturers');
    }

    public function timetable(){
        return view('timetable');
    }
}
