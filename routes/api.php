<?php

use App\Http\Controllers\UserApiController;
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

// get api for feach usesr
Route::get('/users/{id?}', [UserApiController::class, 'showUser']);

//post api for add user
Route::post('/add-user', [UserApiController::class, 'addUser']);

// post api for multple user
Route::post('/add-multi-user', [UserApiController::class, 'addMultiUser']);

//put api for add update user details
Route::put('/update-user-details/{id}', [UserApiController::class, 'updateUser']);

//put api for add update user details
Route::patch('/update-user-single-record/{id}', [UserApiController::class, 'updateUserSingle']);


// delete api for delete single user
Route::delete('/delete-user-single-records/{id}', [UserApiController::class, 'deleteSignleRecord']);

// delete api for delete single user with json
Route::delete('/delete-user-single-record-with-json', [UserApiController::class, 'deleteSignleRecordJson']);

// delete api for delete multiple user
Route::delete('/delete-user-multiple-records/{ids}', [UserApiController::class, 'deleteMultiRecord']);

// delete api for delete multiple user with json
Route::delete('/delete-user-multiple-record-with-json', [UserApiController::class, 'deleteMultipleRecordJson']);
