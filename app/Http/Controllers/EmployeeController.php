<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    function employee(Request $request)
    {
        $data = new Employee();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->age = $request->age;
        $data->phone = $request->number;
        $data->save();
        if ($request) {
//        return $data;
            return "Employee created";
        } else {
            return "Not Created";
        }
    }

    function employeeList(){
            $data=Employee::all();
            return view('employeeList',['data'=>$data]);
    }
        function deleteEmployee($id)
        {
            $isDeleted = Employee::destroy($id);
            if ($isDeleted) {

                return redirect('employeeList');
            }else{
                return "Not Deleted";
            }
        }
}

