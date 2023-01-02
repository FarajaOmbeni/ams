<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Unit;
use App\Models\User;
use App\Models\Course;
use App\Models\Letter;
use App\Models\Application;
use App\Models\Lecturer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(){return view('admin/adminHome');}
    public function dashboard(){
        return view('admin/admin');}

    public function accept(){
        $students = User::where('role','0')->orderBy('email','asc')->get();
        return view('admin/accept', ['students'=>$students]);
    }

    public function enrol(){
        $students = Application::where('enrolled','0')->orderby('personal_email','asc')->get();

        return view('admin/enrol',['students'=>$students]);}

    public function registration_requests(){
        $students = User::where('role','0')->get();
        
        return view('admin/registration_requests', ['students'=>$students])
        ;}

    public function assign_lecturers(){
        $lecturers = User::where('role','2')->get();
        $units = Unit::all();
        return view('admin/assign_lecturers', ['lecturers'=>$lecturers], ['units'=>$units]);
    }

    public function assign($lecid){
        $unit = new Unit();

        $unit->lecturer_id = $lecid;
//        $unit->id = request('unit_id');
        $unit->update();

        dd($unit);
        return redirect('admin/assign_lecturers');
    }

    public function sendRequest($id){
        $user = new User();

        $user = User::findOrFail($id);

        $user->id = $id;
        $user->increment('academic_year', 1);
        $user->update();

        return redirect('admin/registration_requests');
    }

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
        
        $user = new User();
        $user->application_id = $id;
        $user->name = request('username');
        $user->email = request('school_email');
        $user->password = Hash::make(request('password'));
        $user->save();

        return redirect('admin/enrol');
    }

    public function lecturers(){
        $lecturers = User::where('role', '2')->get();
        return view('admin/lecturers', ['lecturers'=>$lecturers]);
    }

    public function addLecturers(){
        $add = new User();

        $add->name = request('name');
        $add->email = request('email');
        $add->role = request('role');
        $add->password = Hash::make(request('password'));
        $add->save();

        $lecturer = new Lecturer();
        $lecturer->name = request('name');
        $lecturer->email = request('email');
        $lecturer->save();

        return redirect('admin/lecturers');
    }

    public function rooms(){
        $rooms = Room::where('isdeleted', '0')->get();
        return view('admin/rooms', ['rooms'=>$rooms]);
    }

    public function addRooms(){
        $add = new Room();

        $add->name = request('name');
        $add->capacity = request('capacity');
        $add->save();

        return redirect('admin/rooms')->with('message','Success!');
    }
    public function editRoom($id){
        $edit = new Room();
        $edit = Room::findOrFail($id);
        $edit->name = request('name');
        $edit->capacity = request('capacity');
        $edit->update();
        return redirect('admin/rooms');
    }

    public function deleteRoom($id){
        $edit = new Room();
        $edit = Room::findOrFail($id);

        $edit->isdeleted = request('isdeleted');
        $edit->update();
        return redirect('admin/rooms');
    }


    public function courses(){
        $courses = Course::where('isdeleted', '0')->get();
        return view('admin/courses', ['courses'=>$courses]);
    }

    public function addCourse(){
        $add = new Course();

        $add->course_name = request('course_name');
        $add->course_code = request('course_code');
        $add->save();

        return redirect('admin/courses');
    }
    public function editCourse($id){
        $edit = new Course();
        $edit = Course::findOrFail($id);
        $edit->course_name = request('course_name');
        $edit->course_code = request('course_code');
        $edit->update();
        return redirect('admin/courses');
    }

    public function deleteCourse($id){
        $edit = new Course();
        $edit = Course::findOrFail($id);

        $edit->isdeleted = request('isdeleted');
        $edit->update();
        return redirect('admin/courses');
    }

    public function units(){
        $units = Unit::where('isdeleted', '0')->get();
        $courses = Course::where('isdeleted','0')->get();

        return view('admin/units', ['units'=>$units], ['courses'=>$courses]);
    }

    public function addUnit(){
        $add = new Unit();

        $add->unit_name = request('unit_name');
        $add->unit_code = request('unit_code');
        $add->academic_year = request('academic_year');
        $add->course_code = request('course_code');
        $add->lecturer_id = request('lecturer_id');
        $add->save();

        return redirect('admin/units');
    }
    public function editUnit($id){
        $edit = new unit();
        $edit = Unit::findOrFail($id);

        $edit->unit_name = request('unit_name');
        $edit->unit_code = request('unit_code');
        $edit->academic_year = request('academic_year');
        $edit->course_code = request('course_code');
        $edit->lecturer_id = request('lecturer_id');
        $edit->update();
        return redirect('admin/units');
    }

    public function deleteUnit($id){
        $edit = new Unit();
        $edit = Unit::findOrFail($id);
        $edit->isdeleted = request('isdeleted');
        $edit->update();
        return redirect('admin/units');
    }


    


}
