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
    function editEmployee($id)
    {
        $data = Employee::find($id);
        return view('editEmployee',['data'=>$data]);
    }
    function updateEmployee(Request $request,$id){
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->age = $request->age;
        $employee->phone = $request->number;
        $employee->save();
        if($employee){
            return redirect('employeeList');
        }else{
            return "Not Updated";
        }
    }
    function search(Request $request){
        $searchData = Employee::where("name","like","%$request->search%")->get();
        return view('employeeList',["data"=>$searchData,'search'=>$request->search]);
    }
}


