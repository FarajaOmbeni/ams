<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class APIController extends Controller
{
    //LECTURERS API
    public function index(){
        return response()->json([
            'status'=>true,
            'lecturers'=>[]
        ]);
    }

    public function store(Request $request){
        try{
            $lecturer = new User();
            $lecturer-> name = request('name');
            $lecturer -> email = request('email'); 
            $lecturer -> password = request('password'); 
            $lecturer -> save();

            return response() -> json([
                'message'=>'Lecturer Added Succesfully',
                'lecturer'=>$lecturer,
                'status'=>200

            ]);
        }catch(\Exception $e){
            return response() -> json([
                'message'=>'Lecturer Not Added',
                'form'=>$lecturer,
                'status'=>201,
                '4'=>$e

            ]);
        }  
    }

    public function update(){

    }

    public function delete(){
        
    }

}
