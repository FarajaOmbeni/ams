<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;

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
Route::post('/postForm',[FormController::class, 'post']);
Route::get('/admin', [AdminController::class,'index'])->middleware('auth');
Route::get('/admin/accept', [AdminController::class,'accept']);
Route::get('/admin/enrol', [AdminController::class,'enrol']);
Route::get('/admin/registration_requests', [AdminController::class,'registration_requests']);
Route::get('/admin/assign_lecturers', [AdminController::class,'assign_lecturers']);
Route::get('/admin/timetable', [AdminController::class,'timetable']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
