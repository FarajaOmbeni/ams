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
    protected function post(){
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


    //Another way to store form data
/*
      protected function post(){
        Validator::make(request()->all(),[
            'name' => 'required',
            'description' => 'required'
        ])->validate();
        Form::create([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return redirect('post');
    }

    //Updating data in the database
    public function updateForm($id){
        $form = Form::find($id);
        return view('update', [
            'form' => $form
        ]);
    }

    protected function editForm($id){
        $validate_data = Validator::make(request()->all(),[
            'name' => 'required',
            'description' => 'required'
        ])->validated();
        $form = Form::findOrFail($id);
        $form -> update($validate_data);
        return back();
    }
*/

//PASSING DATA IN ROUTES
public function allposts(){
    $posts = Form::all();
    return view('allPosts', ['posts'=>$posts]);
}
    
}
