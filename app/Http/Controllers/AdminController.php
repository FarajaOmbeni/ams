<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use App\Models\Letter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(){return view('admin/admin');}

    public function accept(){
        $students = User::where('role','0')->orderBy('email','asc')->get();
        return view('admin/accept', ['students'=>$students]);
    }

    public function enrol(){
        $students = Application::where('enrolled','0')->orderby('email','asc')->get();

        return view('admin/enrol',['students'=>$students]);}

    public function registration_requests(){return view('admin/registration_requests');}

    public function assign_lecturers(){return view('admin/assign_lecturers');}

    public function timetable(){return view('admin/timetable');}

    public function acceptLetter(){
        Validator::make(request()->all(),[
            'email'=>'required',
            'letter'=>'required'
        ])->validate();

        $letter = new Letter();
        $letter->student_email = request('email');
        $letter->letter = request('letter');
        $letter->save();
        return redirect('admin/accept');
    }

    public function enrolStudent($id){
        Validator::make(request()->all(),[
            'enrol'=>'required','integer',
        ])->validate();

        $enrol = new Application();
        $enrol = Application::findOrFail($id);
        $enrol->enrolled = request('enrol');
        $enrol->update();
        return redirect('admin/enrol');
    }


}
