<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\StudentController;
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

//Applications and contact us
Route::get('/apply', [GeneralController::class, 'apply']);
Route::post('/postapply', [GeneralController::class, 'postApply']);
Route::post('/contactForm', [GeneralController::class, 'postContact']);



//----------------ADMIN------------------------------//
Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/', [AdminController::class,'index']);
    Route::get('dashboard', [AdminController::class,'dashboard']);
    Route::get('accept', [AdminController::class,'accept']);

    //Enrol Students
    Route::get('enrol', [AdminController::class,'enrol']);
    Route::post('enrolStudent/{id}', [AdminController::class, 'enrolStudent']);
    Route::post('sendLetter', [AdminController::class, 'acceptLetter']);
    //registration requests
    Route::get('registration_requests', [AdminController::class,'registration_requests']);
    //lecturers
    Route::get('assign_lecturers', [AdminController::class,'assign_lecturers']);
    Route::get('lecturers', [AdminController::class, 'lecturers']);
    Route::post('addlecturer', [AdminController::class, 'addLecturers']);
    Route::post('assign/lec_id={lec_id}/unit_id={unit_id}', [AdminController::class, 'assign']);

    //rooms
    Route::get('rooms', [AdminController::class, 'rooms']);
    Route::post('addroom', [AdminController::class, 'addRooms']);
    Route::post('rooms/{id}',[AdminController::class, 'editRoom']);
    Route::post('deleteRoom/{id}',[AdminController::class, 'deleteRoom']);
    //courses
    Route::get('courses', [AdminController::class, 'courses']);
    Route::post('addcourse',[AdminController::class, 'addCourse']);
    Route::post('courses/{id}',[AdminController::class, 'editCourse']);
    Route::post('deleteCourse/{id}',[AdminController::class, 'deleteCourse']);
    //units
    Route::get('units', [AdminController::class, 'units']);
    Route::post('addunit',[AdminController::class, 'addUnit']);
    Route::post('units/{id}',[AdminController::class, 'editUnit']);
    Route::post('deleteunit/{id}',[AdminController::class, 'deleteUnit']);

    //timetable
    Route::get('timetable', [AdminController::class,'timetable']);
});



//<-------------------------LECTURER--------------------------------------->
Route::prefix('lecturer')->middleware('auth','isLecturer')->group(function(){
    Route::get('/', [LecturerController::class,'index']);
    Route::get('dashboard', [LecturerController::class,'dashboard']);
    Route::get('units', [LecturerController::class,'units']);
    Route::get('enrolled', [LecturerController::class,'enrolled']);
    Route::get('marks', [LecturerController::class,'marks']);
    Route::get('attendance', [LecturerController::class,'attendance']);
    Route::post('attendance/mark', [LecturerController::class,'MarkAttendance']);
});






//<--------------------------STUDENT--------------------------->
Route::prefix('student')->middleware('auth')->group(function(){

        Route::get('/', [StudentController::class, 'student']);
        Route::get('dashboard', [StudentController::class,'dashboard']);
        Route::get('mydetails', [StudentController::class, 'mydetails']);
        Route::get('selfregistration', [StudentController::class, 'selfregistration']);
        Route::get('courseworkmarks', [StudentController::class, 'courseworkmarks']);
        Route::get('attendance', [StudentController::class, 'attendance']);
        
});






//<--------------------------STAFF------------------------------------>
Route::prefix('staff')->middleware('auth','isStaff')->group(function(){
    //Input staff routes in here
});





Auth::routes();
Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
