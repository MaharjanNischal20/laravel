<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function student(){
        $students = Student::all();
        return view('studentView',['students'=>$students]);
//        return $students;
    }
}
