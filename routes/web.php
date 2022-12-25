<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;

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
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
