<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function login(Request $request)
    {
//        $request->session()->put("user",$request->input('user'));
        $request->session()->flash("message","Hello its me Nischal"); //flash session
        return redirect("profile");
    }

    function logout(Request $request){
        $request->session()->pull("user");
        return redirect("profile");
    }
}
