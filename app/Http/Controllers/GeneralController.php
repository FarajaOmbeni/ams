<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Contact;
use App\Models\Application;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function apply(){
        $courses = Course::all();
        return view('apply', ['courses'=>$courses]);
    }

    public function postApply(){
        $apply = new Application();

        $apply->fname = request('fname');
        $apply->lname = request('lname');
        $apply->personal_email = request('email');
        $apply->phone_number = request('phone_number');
        $apply->identification_number = request('identification_number');
        $apply->town = request('town');
        $apply->home_county = request('home_county');
        $apply->postal_address = request('postal_address');
        $apply->postal_code = request('postal_code');
        $apply->nationality = request('nationality');
        $apply->address = request('address');
        $apply->religion = request('religion');
        $apply->marital_status = request('marital_status');
        $apply->course = request('course');
        $apply->father_name = request('father_name');
        $apply->father_email = request('father_email');
        $apply->father_tel = request('father_tel');
        $apply->father_occupation = request('father_occupation');
        $apply->mother_name = request('mother_name');
        $apply->mother_email = request('mother_email');
        $apply->mother_tel = request('mother_tel');
        $apply->mother_occupation = request('mother_occupation');
        $apply->guardian_name = request('guardian_name');
        $apply->guardian_email = request('guardian_email');
        $apply->guardian_tel = request('guardian_tel');
        $apply->guardian_occupation = request('guardian_occupation');
        $apply->save();

        return redirect('apply');
    }

    public function postContact(){
        $message = new Contact();

        $message->name = request('name');
        $message->email = request('email');
        $message->phone_number = request('phone_number');
        $message->message = request('message');
        $message->save();

        return redirect()->back();
        
    }
}
