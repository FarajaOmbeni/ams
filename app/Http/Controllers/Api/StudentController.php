<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role','0')->get();

        return response()->json([
            'status' => true,
            'students' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $request->merge(['password' => Hash::make($request->input('password'))]);
        $user = User::create($request->all());

        return response()->json([
            'status'=> true,
            'message'=> "Student Created Succesfully",
            'student'=>$user
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    
    public function update(UserRequest $request, user $student)
    {
        $request->merge(['password' => Hash::make($request->input('password'))]);
        $student->update($request->all());

        return response()->json([
            'status'=> true,
            'message'=> "Student Updated successfully!",
            'student'=> $student
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $student)
    {
        $student->delete();

        return response()->json([
            'status'=> true,
            'message'=> "Student Deleted Succesfully",
        ], 200);
    }
}
