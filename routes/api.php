<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route to Create a Staff
Route::post('/staff', 'StaffApiController@create');

// Route to show all Staffs
Route::get('getStaffs', 'StaffApiController@show');

// Route to show/display Staffs By their ID
Route::get('/getStaffs/{id}', 'StaffApiController@showById');

// Route to Edit or Update Staffs By their ID
Route::put('/updateStaffs/{id}', 'StaffApiController@updateById');

// Route to delete Staff Record
Route::delete('/deleteStaffs/{id}', 'StaffApiController@deleteById');

// Route to Toggle Staff Record
Route::post('/toggleStaffs/{id}', 'StaffApiController@toggleById');
