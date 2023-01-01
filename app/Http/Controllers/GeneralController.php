<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function apply(){
        return view('apply');
    }

    public function postApply(){
        $apply = new Application();

        $apply->
        
    }
}
