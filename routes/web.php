<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LecturerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('/post',[FormController::class, 'index']);
//posting data to the database
Route::post('/postForm',[FormController::class, 'store_form']);
//Updating data in the database
Route::get('/post/{id}/update', [FormController::class, 'updateForm']);
Route::post('/post/{id}/edit', [FormController::class, 'editForm']);
//Displaying all the data in a view
Route::get('/allposts', [FormController::class, 'allposts']);

//admin
Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/', [AdminController::class,'index']);
    Route::get('accept', [AdminController::class,'accept']);
    Route::get('enrol', [AdminController::class,'enrol']);
    Route::get('registration_requests', [AdminController::class,'registration_requests']);
    Route::get('assign_lecturers', [AdminController::class,'assign_lecturers']);
    Route::get('timetable', [AdminController::class,'timetable']);
    Route::post('sendLetter', [AdminController::class, 'acceptLetter']);
    Route::post('enrolStudent/{id}', [AdminController::class, 'enrolStudent']);
});

Route::prefix('lecturer')->middleware('auth','isLecturer')->group(function(){
    
});

Route::get('/lecturer', [LecturerController::class,'index']);
Route::get('/lecturer/units', [LecturerController::class,'units']);

Route::prefix('student')->middleware('auth')->group(function(){
    //Input Lecturer routes routes in here
});

Route::prefix('staff')->middleware('auth','isStaff')->group(function(){
    //Input staff routes in here
});





Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
