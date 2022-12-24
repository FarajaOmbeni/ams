<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function allBooks(){
        $books=BOOK::all();
    }

    public function index(){
        return view('form');
        
    }

    public function login(){

        //comparing input with db data
        if(auth()->attempt($request)){
            $request -> session()->regenerate();
        }
        //returning an error
        return back()->withErrors(['name'=>'Invalid Credentials'])->onlyInput('name');
    }

  /*  public function post(Request $Request){
        dd($Request);
    }*/
/*    protected function post(){
        $form = new Form();
        $form->name = request('name');
        $form->description = request('description');
        $form->save();
    }*/

    protected function post(){
        Form::create([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return redirect('post');
    }

    
}
