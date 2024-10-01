<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilder extends Controller
{
    //
    function index(){
        $result = DB::table("students")->get();
//        $result = DB::table("students")->where("Gender","=","male")->get();
//        $result = DB::table("students")->insert([
//            "id"=>4,
//            "Name"=>"Ritika",
//            "Age"=>18,
//            "Gender"=>"Female"
//
//
//            ]);
//        if($result){
//            echo "Data inserted";
//        }else{
//            echo "Data not inserted";
//        }

//        $result = DB::table("students")->where("Name","=","Nischal")->update(['age'=>'23']);
//        $result = [$result];
//        if($result){
//            echo "Data updated successfully";
//        }else{
//            echo "Data not updated";
//        }
//        $result = DB::table("students")->where("id","=","4")->delete();
//        $result = [$result];
//        if($result){
//            echo "Data deleted successfully";
//        }else{
//            echo "Data not deleted";
//        }
        return view("queryBuilder",["students"=>$result]);
//        return $result;
    }
}
