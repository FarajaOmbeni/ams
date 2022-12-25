<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{

    public function index(){
        return view('form');
        
    }

    //Storing form data and form validation
    protected function store_form(){
        Validator::make(request()->all(),[
            'name' => 'required',
            'description' => 'required'
        ])->validate();

        $form = new Form();
        $form->name = request('name');
        $form->description = request('description');
        $form->save();
        return redirect('post');
    }
    
    //EDITING THE DATA IN THE DATABASE

    //returning the update form view
    public function updateForm($id){
        $form = Form::find($id);
        return view('update', [
            'form' => $form
        ]);
    }

    //updating the data
    protected function editForm($id){
        Validator::make(request()->all(),[
            'name' => 'required',
            'description' => 'required'
        ])->validate();

        $form = new Form();
        $form = Form::findOrFail($id);
        $form->name = request('name');
        $form->description = request('description');
        $form->update();
        return back();
    }

        //PASSING DATA IN ROUTES
        public function allposts(){
        $posts = Form::all();

        //using condition
        //$posts = Form::where('column','value')->get();
        return view('allPosts', ['posts'=>$posts]);
    }
    
        //Storing data using an API
        public function store_form_api(){
            try{
                $form = new Form();
                $form-> name = request('name');
                $form -> description = request('description'); 
                $form -> save();
    
                return response() -> json([
                    'message'=>'Student Created Succesfully',
                    'form'=>$form,
                    'status'=>200
    
                ]);
            }catch(\Exception $e){
                return response() -> json([
                    'message'=>'Student Not Created',
                    'form'=>$form,
                    'status'=>201,
                    '4'=>$e
    
                ]);
            }
        }
    
        //Fetch data using an API
        public function getFormData(){
            return Form::all();
        }
        public function getFormDataByID($id){
            return Form::where('id',$id)->get();
        }

    
}
