<?php

use App\Http\Controllers\FormController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
