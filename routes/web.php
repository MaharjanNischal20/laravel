<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    });


});

