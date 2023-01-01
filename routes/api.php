<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\LecturerController;
use App\Http\Controllers\Api\RoomController;
use App\Http\Controllers\Api\UnitController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//API route for POST method
Route::post('store-form', [FormController::class, 'store_form_api']);

//API route for GET method
Route::get('get-form-data', [FormController::class, 'getFormData']);
Route::get('get-form-data/{id}', [FormController::class, 'getFormDataByID']);

//Students API
Route::apiResource('students', StudentController::class);

//Lecturers API
Route::apiResource('lecturers', LecturerController::class);

//Admin API
Route::apiResource('admins', AdminController::class);

//Courses
Route::apiResource('courses', CourseController::class);

//Units
Route::apiResource('units', UnitController::class);

//Rooms
Route::apiResource('rooms', RoomController::class);