<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{UserController,AuthController,CategoryController};

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(UserController::class)->group(function () {
  
    Route::post('register','register');

});

Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {
    Route::controller(AuthController::class)->group(function () {
        Route::post('login','login');
        Route::post('logout','logout');
        Route::post('send/otp','sendOtp');
        Route::post('/forget/change/password','forgotPassword');
    });
});

Route::group(['middleware' => 'api'], function ($router) {
    Route::resource('categories', CategoryController::class);

});