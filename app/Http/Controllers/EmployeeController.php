<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    function employee(Request $request){
        $data =new Employee();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->age =$request->age;
        $data->phone = $request->number;
        $data->save();
        if($request){
        return $data;
            echo "Employee created";
        }else{
            echo "Not Created";
        }
}
}
