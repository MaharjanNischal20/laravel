<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{

    function userForm2(Request $request){
    echo $request->city;
        if(is_array($request->skill)) {
            echo implode(", ", $request->skill) . "<br>";
        } else {
            echo $request->skill . "<br>";
        }
    echo $request->age;
    echo $request->gender;
    }
    function userForm(Request $request)
    {
        $request -> validate([
            "username" => "required |min:3 |max:20 ",
            "city" => "required | max:20 |uppercase",
            "email" => "required",
            ],
        [
            "username.required" => "Username chainxa", //yo chai aafai milayera lekhne
        ]);
        return $request;
    }
    function index()
    {
        $user = "NischalM";
        $users = ["Ram","Hari","Sita"];
        return view('home', ['users' => $users,"name" => $user]);
    }
    function getUserName($name) {
        return view('about',['name'=>$name]);
    }

    function loginUser() {
        if(View::exists('admin.login')) {
            return view('admin.login');
        }else {
            echo "NO login page";
        }
    }

    function retrievingData()
    {
        $users = DB::select('select * from users');
        return view("user",["users"=>$users]);
    }

    function modelQueryBuilder(){
        $results = User::all();
//        $results = User::get();
//        $results = User::insert(["name"=>"Nikesh","email"=>"nikesh@test.com","password"=>"12345"]);
//        if($results){
//            echo "Data inserted successfully";
//
//        }else{
//            echo "Data not inserted";
//        }
//        $results = User::where("name","Nikesh")->update(["email"=>"Nikesh@gmail.com"]);
//        if($results){
//            echo "Data updated successfully";
//
//        }else{
//            echo "Data not updated";
//        }
//        $results = User::where("name","Nikesh")->delete();
//        if($results){
//            echo "Data deleted successfully";
//
//        }else{
//            echo "Data not deleted";
//        }
//        $results = User::first();
        return view("modelQueryBuilder",["users"=>$results]);
    }
}
