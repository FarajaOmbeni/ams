<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;

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



//----------------ADMIN------------------------------//
Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/', [AdminController::class,'index']);
    Route::get('dashboard', [AdminController::class,'dashboard']);
    Route::get('accept', [AdminController::class,'accept']);
    Route::get('enrol', [AdminController::class,'enrol']);
    Route::get('registration_requests', [AdminController::class,'registration_requests']);
    Route::get('assign_lecturers', [AdminController::class,'assign_lecturers']);
    Route::get('timetable', [AdminController::class,'timetable']);
    Route::post('sendLetter', [AdminController::class, 'acceptLetter']);
    Route::post('enrolStudent/{id}', [AdminController::class, 'enrolStudent']);
});



//<-------------------------LECTURER--------------------------------------->
Route::prefix('lecturer')->middleware('auth','isLecturer')->group(function(){
    Route::get('lecturerHome', [LecturerController::class,'index']);
});

Route::get('/lecturer', [LecturerController::class,'index']);
Route::get('/lecturer/units', [LecturerController::class,'units']);
Route::get('/lecturer/enrolled', [LecturerController::class,'enrolled']);
Route::get('/lecturer/marks', [LecturerController::class,'marks']);
Route::get('/lecturer/attendance', [LecturerController::class,'attendance']);




//<--------------------------STUDENT--------------------------->
Route::prefix('student')->middleware('auth')->group(function(){

        Route::get('/', [StudentController::class, 'student']);
        Route::get('dashboard', [StudentController::class,'dashboard']);
        Route::get('mydetails', [StudentController::class, 'mydetails']);
        Route::get('selfregistration', [StudentController::class, 'selfregistration']);
        Route::get('courseworkmarks', [StudentController::class, 'courseworkmarks']);
        Route::get('attendance', [StudentController::class, 'attendance']);
        Route::get('progressreport', [StudentController::class, 'progressreport']);
        Route::get('examcard', [StudentController::class, 'examcard']);
        Route::get('feestructure', [StudentController::class, 'feestructure']);
        Route::get('feestatement', [StudentController::class, 'feestatement']);
        Route::get('graduation', [StudentController::class, 'graduation']);
});






//<--------------------------STAFF------------------------------------>
Route::prefix('staff')->middleware('auth','isStaff')->group(function(){
    //Input staff routes in here
});





Auth::routes();
Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
