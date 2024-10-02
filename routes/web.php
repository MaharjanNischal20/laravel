<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HttpContoller;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;




Route::prefix("/admin")->group(function () {

//Route Middleware
Route::view('/details', 'details')->middleware(AgeCheck::class);
Route::view('/userform', 'input-form')->middleware([CountryCheck::class,AgeCheck::class]);
//Group Middleware
////    Route::view('/details', 'details') -> middleware('check1');
//    Route::middleware("check1")->group(function () {
//    Route::view('/details', 'details');
//
//    Route::view('/userform', 'input-form');
//    });

//    Route::controller("Another Middleware Name")->group(function () {
//        Another Route to which we want to apply middleware.
//    })


    Route::controller(UserController::class )->group(function () {
        Route::post("/user-details", "userForm2");
        Route::post("/form", "userForm");
        Route::get("/db","retrievingData");
        Route::get("/model-query","modelQueryBuilder");
    });

    Route::get("/http",[HttpContoller::class,'index']);

    Route::controller(\App\Http\Controllers\QueryBuilder::class)->group(function () {
        Route::get("/query", "index");
    });

});

Route::view("/login","loginView");
Route::view("/profile","profileView");

Route::post("login",[LoginController::class,'login']);
Route::get("logout",[LoginController::class,'logout']);

Route::view("upload","uploadFile");
Route::post("addfile",[UploadController::class,'upload']);
