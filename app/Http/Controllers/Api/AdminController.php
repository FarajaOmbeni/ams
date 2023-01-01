<?php

namespace App\Http\Controllers\Api;

use App\Models\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role','1')->get();

        return response()->json([
            'status' => true,
            'admin' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        
        $request->merge(['password' => Hash::make($request->input('password'))]);
        $user = User::create($request->all()+ ['role' => 1]);

        return response()->json([
            'status'=> true,
            'message'=> "Admin Created Succesfully",
            'admin'=>$user
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, user $admin)
    {
        $request->merge(['password' => Hash::make($request->input('password'))]);
        $admin->update($request->all());

        return response()->json([
            'status'=> true,
            'message'=> "Admin Updated successfully!",
            'admin'=> $admin
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $admin)
    {
        $admin->delete();

        return response()->json([
            'status'=> true,
            'message'=> "Admin Deleted Succesfully",
        ], 200);
    }
}
